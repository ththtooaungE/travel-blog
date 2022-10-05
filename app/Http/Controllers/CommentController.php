<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Blog $blog)
    {
        $formData = request()->validate([
            'comments'=>'required|string|max:255'
        ]);

        $blog->comments()->create([
            'body'=>$formData['comments'],
            'user_id'=>auth()->id()
        ]);
        return redirect("/blogs/$blog->slug");
    }
}
