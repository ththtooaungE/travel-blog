<x-admin.admin-layout>
    <div class="card p-2 m-2" style="min-height:450px;position:relative">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Username</th>
                    <th scope="col">Email</th>
                    <th scope="col">Avatar</th>
                    <th scope="col">Creation date</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">{{$user->name}}</th>
                    <td>{{$user->username}}</td>
                    <td>{{$user->email}}</td>
                    <td><img src="/storage/{{$user->avatar}}" width="100px" alt="avatar"></td>
                    <td>{{$user->created_at->diffForHumans()}}</td>
                </tr>
            </tbody>
        </table>
        
    </div>
</x-admin.admin-layout>