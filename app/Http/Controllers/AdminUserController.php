<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    public function index()
    {
        return view('admin.users.index',[
            'users'=>User::latest()->whereNot('is_admin',true)->paginate(6)
        ]);
    }

    public function show(User $user)
    {
        return view('admin.users.show',[
            'user'=>$user
        ]);
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect('/admin/users');
    }
}
