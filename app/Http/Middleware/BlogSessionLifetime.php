<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Config;

class BlogSessionLifetime
{
    public function handle($request, Closure $next)
    {
        // Set session lifetime to 24 hours (1440 minutes)
        Config::set('session.lifetime', 1);

        return $next($request);
    }
}
