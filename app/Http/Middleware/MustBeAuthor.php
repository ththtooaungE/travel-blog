<?php

namespace App\Http\Middleware;

use App\Models\Blog;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class MustBeAuthor
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $slug = Str::replaceLast('/edit','',Str::replaceFirst('admin/blogs/','',request()->path()));
        $blog = Blog::firstWhere('slug',$slug);
        
        if($blog->user_id !== auth()->user()->id)  {
            return abort(403);
        }
        return $next($request);
    }
}
