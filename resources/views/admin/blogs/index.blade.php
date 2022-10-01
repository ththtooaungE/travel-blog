<x-admin.admin-layout>
    @if(session('success'))
    <div class="d-flex justify-content-center align-items-center p-2 m-2"><p class="p-0 m-0">{{session()->get('success')}}</p></div>
    @endif
    <div class="card p-2 m-2" style="min-height:450px;position:relative">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col" width="10%">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Author</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($blogs as $blog)
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$blog->title}}</td>
                    <td>{{$blog->user->name}}</td>
                    <td class="d-flex">
                        <a href="/admin/blogs/{{$blog->slug}}/edit" 
                            class="btn btn-success mx-1 {{$blog->user_id === auth()->user()->id ? '' : 'disabled'}}"
                            >Edit</a>
                        <form action="/admin/blogs/{{$blog->slug}}/delete" method="POST" onsubmit="return confirm('Are you sure you want to delete this?')">
                            @csrf
                            @method('delete')
                            <button type="submit" 
                                class="btn btn-danger {{$blog->user_id === auth()->user()->id ? '' : 'disabled'}}"
                                >Delete</button>
                        </form>
                    </td>
                </tr>
                @empty
                <p>No Blogs Found!</p>
                @endforelse
            </tbody>
        </table>
        <div style="position:absolute;bottom:10px;right:10px">
            <a href="/admin/blogs/create" class="btn btn-primary px-4 mx-4">Create a new Blog</a>
        </div>
    </div>
    {{$blogs->links()}}
</x-admin.admin-layout>