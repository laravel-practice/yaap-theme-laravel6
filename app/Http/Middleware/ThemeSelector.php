<?php

namespace App\Http\Middleware;

use Closure;
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

        // there you have to define your theme

        // here if you pass `mob theme` then
        // then the path that you pass into -> config::set() -> which is in appServiceProvider
        // should be `mob` theme path  -> $mob = base_path('resources/themes/mob');

        //OR
        // Tips Hack it
        // just change all theme config name into default
        // go inside config 'name' => 'jivan', into 'name' => 'default', to all theme
        // and init `default` theme like this Theme::init('default');
        // now you can change theme path (appServiceProvider.php) Config::set('theme.path', $mob);
        // as you desire without caring this file(themeSelector.php) Theme::init('default');

        Theme::init('default');
        return $next($request);
    }
}
