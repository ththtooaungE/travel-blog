<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return view('index',[
            'blogs'=>Blog::all()
        ]);
    }

    public function show(Blog $blog)
    {
        return view('show',[
            'blog'=>Blog::where('slug',$blog->slug)->first()
        ]);
    }
}
