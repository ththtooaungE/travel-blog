<x-admin.admin-layout>
    <div class="card p-2 m-2" style="min-height:450px">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col" width="10%">#</th>
                    <th scope="col">Username</th>
                    <th scope="col">Email</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($users as $user)
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$user->username}}</td>
                    <td>{{$user->email}}</td>
                    <td class="d-flex">
                        <a href="/admin/users/{{$user->username}}/show" class="btn btn-success mx-1">Show</a>
                        <form action="/admin/users/{{$user->username}}/delete" method="POST" 
                            onsubmit="return confirm('Are you sure you want to delete this?')">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @empty
                <p>No users Found!</p>
                @endforelse
            </tbody>
        </table>
    </div>
    {{$users->links()}}
</x-admin.admin-layout>