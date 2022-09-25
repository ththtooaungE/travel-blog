<x-admin.admin-layout>
    <div class="card p-2 m-2" style="min-height:450px;position:relative">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col" width="10%">#</th>
                    <th scope="col">Username</th>
                    <th scope="col">Email</th>
                    <th scope="col">Add a new admin</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$user->username}}</td>
                    <td>{{$user->email}}</td>
                    <td>
                        <form action="/admin/admins/{{$user->username}}/add" method="POST" onsubmit="return confirm('Are you sure you want this person to be admin?')">
                            @csrf
                            @method('patch')
                            <button type="submit" class="btn btn-success">Add</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-admin.admin-layout>