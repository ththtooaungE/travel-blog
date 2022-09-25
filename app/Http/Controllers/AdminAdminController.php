<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminAdminController extends Controller
{
    public function index()
    {
        return view('admin.admins.index',[
            'admins'=>User::where('is_admin',true)->get()
        ]);
    }

    public function add()
    {
        return view('admin.admins.add',[
            'users'=>User::latest()->whereNot('is_admin',true)->paginate(6)
        ]);
    }

    public function add_post(User $user)
    {   
        $user->update(['is_admin'=>true]);
        return redirect('/admin/admins');
    }
}
