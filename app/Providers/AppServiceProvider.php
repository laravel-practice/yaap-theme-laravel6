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
//        $path = base_path()."/themes/jivan";
//        Config::set('theme.path', $path);

        $this->changeThemePath();
//        $this->changeAssetPath();
//        $this->switchDomainValue();

    }

    public function changeThemePath(){
        $default = base_path('themes/default');
        $jivan = base_path('themes/jivan');
//        dd($jivan);
        Config::set('theme.path', $jivan);
    }

//    public function changeAssetPath(){
//        $default = 'themes/default';
//        $jivan = 'themes/jivan';
//        Config::set('theme.path', $jivan);
//    }

//    public function switchDomainValue(){
//        $currentTheme = $this->current_theme;
//        if (!request()->is('admin/*') && $currentTheme) {
//            session()->forget('global-domain-id');
//            session()->put('global-domain-id', $currentTheme->id);
//            dd(session()->forget('global-domain-id'));
//        }
//    }


}
