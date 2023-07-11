<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Distination;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return view('blogs.index',[
            'blogs'=>Blog::filter(request(['search','category','distination']))
                ->latest('id')
                ->with('categories')
                ->paginate(6)
                ->withQueryString()
        ]);
    }

    public function show(Blog $blog)
    {
        return view('blogs.show',[
            'blog'=>$blog,
            'randomBlogs'=>Blog::inRandomOrder()->whereNot('slug',$blog->slug)->take(3)->get()
        ]);
    }

}
