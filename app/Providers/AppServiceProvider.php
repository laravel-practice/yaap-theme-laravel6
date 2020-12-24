<?php

namespace App\Providers;

use Illuminate\Support\Facades\Config;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    private $current_theme;

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->changeThemePath();

    }

    public function changeThemePath(){
        $default = base_path('themes/default');
        $jivan = base_path('themes/jivan');
        Config::set('theme.path', $default);
    }



}
