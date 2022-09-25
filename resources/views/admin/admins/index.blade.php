<x-admin.admin-layout>
    <div class="card p-2 m-2" style="min-height:450px;position:relative">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col" width="10%">#</th>
                    <th scope="col">Username</th>
                    <th scope="col">Email</th>
                    <th scope="col">Number Of Written Blogs</th>
                </tr>
            </thead>
            <tbody>
                @foreach($admins as $admin)
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$admin->username}}</td>
                    <td>{{$admin->email}}</td>
                    <td>{{$admin->blogs->count()}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div style="position:absolute;bottom:10px;right:10px">
            <a href="/admin/admins/add" class="btn btn-primary px-4 mx-4">Add a new admin</a>
        </div>
    </div>
</x-admin.admin-layout>