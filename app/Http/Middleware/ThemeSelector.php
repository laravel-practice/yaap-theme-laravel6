<?php

namespace App\Http\Middleware;

use Closure;
use Doctrine\Common\Cache\Cache;
use Theme;

class ThemeSelector
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle(\Illuminate\Http\Request $request, Closure $next)
    {
        Theme::init('jivan');
        return $next($request);
    }
}
