<x-admin.admin-layout>
    <div class="card p-2 m-2" style="min-height:450px;position:relative">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col" width="10%">#</th>
                    <th scope="col">City or Town</th>
                    <th scope="col">Slug</th>
                    <th scope="col">Creation Date</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($distinations as $distination)
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$distination->name}}</td>
                    <td>{{$distination->slug}}</td>
                    <td>{{$distination->created_at->diffForHumans()}}</td>
                    <td>
                        <form action="/admin/distinations/{{$distination->slug}}/destroy" method="POST"
                            onSubmit="return confirm('Do you want to delete this item?');">
                            @csrf
                            @method('delete')
                            <button class="btn">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div style="position:absolute;bottom:10px;right:10px">
            <a href="/admin/distinations/create" class="btn btn-primary px-4 mx-4">Add a new distination</a>
        </div>
    </div>
</x-admin.admin-layout>