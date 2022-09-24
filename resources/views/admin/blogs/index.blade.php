<x-admin.admin-layout>
    <div class="card p-2 m-2" style="min-height:450px;position:relative">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col" width="10%">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Intro</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($blogs as $blog)
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$blog->title}}</td>
                    <td>{!!substr($blog->body,0,45)!!}...</td>
                    <td class="d-flex">
                        <a href="/admin/blogs/{{$blog->slug}}/edit" class="btn btn-success mx-1">Edit</a>
                        <form action="/admin/blogs/{{$blog->slug}}/delete" method="POST" onsubmit="return confirm('Are you sure you want to delete this?')">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger">Delete</button>
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