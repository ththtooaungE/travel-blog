<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return view('index',[
            'blogs'=>Blog::filter(request(['search','category']))->latest()->with('category')->paginate(6)->withQueryString()
        ]);
    }

    public function show(Blog $blog)
    {
        return view('show',[
            'blog'=>Blog::where('slug',$blog->slug)->first()
        ]);
    }

}
