<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AuthController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store()
    {
        $formData = request()->validate([
            'name'=>['required','max:255'],
            'username'=>['required','min:6',Rule::unique('users','username')],
            'email'=>['required','email',Rule::unique('users','email')],
            'password'=>['required','min:8']
        ]);

        $user = User::create($formData);
        auth()->login($user);
        return redirect('/')->with(session()->flash('success','Welcome '.$user->name.'!!'));
    }

    public function login()
    {
        return view('auth.login');
    }

    public function login_post()
    {
        $formData = request()->validate([
            'email'=>['required','email',Rule::exists('users','email')],
            'password'=>['required','min:8']
        ],[
            'email.required'=>'Your email is needed!',
            'email.exists'=>'This email is not in our system!'
            ]);
        
        if (auth()->attempt($formData)) {
            return redirect('/')->with('success','Welcome back, '.auth()->user()->name.'!');
        } else {
            return back()->withErrors(['password'=>'Incorrect credentials!']);
        }
    }

    public function logout()
    {
        auth()->logout();
        return redirect('/')->with(session()->flash('success','You have logouted'));
    }
}
