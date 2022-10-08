<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Blog;
use Illuminate\Http\Request;

class SubscribeController extends Controller
{
    public function subscriptionHandler(Blog $blog)
    {   
        if(auth()->user()->isSubscribed($blog)) {
            $blog->unSubscribe();
        } else {
            $blog->subscribe();
        }
        return back();
    }
}
