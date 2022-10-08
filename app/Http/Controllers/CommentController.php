<?php

namespace App\Http\Controllers;

use App\Mail\SubscriberMail;
use App\Models\Blog;
use Illuminate\Support\Facades\Mail;

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

        $subscribers = $blog->subscribers->filter(fn($subscriber)=>$subscriber->id !== auth()->id());
        $subscribers->each( function($subscriber) use($blog) {
            Mail::to($subscriber->email)->send(new SubscriberMail($blog));
        });
        return redirect("/blogs/$blog->slug");
    }
}
