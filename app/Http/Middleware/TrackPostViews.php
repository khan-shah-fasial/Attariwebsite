<?php

namespace App\Http\Middleware;

use App\Models\Blog;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TrackPostViews
{
    public function handle(Request $request, Closure $next)
    {
        $slug = $request->route('slug');
        $post = Blog::where('slug', $slug)->first();

        if ($post) {
            $key = 'post_viewed_' . $post->id;

            if (!$request->session()->has($key)) {
                // Increment post view count
                $post->increment('views');

                // Mark post as viewed in session
                $request->session()->put($key, true);
            }
        }

        return $next($request);
    }

}
