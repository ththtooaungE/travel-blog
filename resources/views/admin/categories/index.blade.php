<x-admin.admin-layout>
    <div class="card p-2 m-2" style="min-height:450px;position:relative">
        <table class="table table-hover mb-5">
            <thead>
                <tr>
                    <th scope="col" width="10%">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Slug</th>
                    <th scope="col">Creation Date</th>
                    <th scope="col" width="20%">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categories as $category)
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$category->name}}</td>
                    <td>{{$category->slug}}</td>
                    <td>{{$category->created_at->diffForHumans()}}</td>
                    <td class="d-flex">
                        <a href="/admin/categories/{{$category->slug}}/edit" class="btn btn-primary m-1">Edit</a>
                        <form action="/admin/categories/{{$category->slug}}/destroy" method="POST"
                            onSubmit="return confirm('Do you want to delete this item?');">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger m-1">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div style="position:absolute;bottom:10px;right:10px">
            <a href="/admin/categories/create" class="btn btn-primary px-4 mx-4">Add a new category</a>
        </div>
    </div>
</x-admin.admin-layout>