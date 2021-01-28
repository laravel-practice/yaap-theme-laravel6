<?php

namespace App\Providers;

use App\DomainSetting;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;


class AppServiceProvider extends ServiceProvider
{

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

        // there you have to define your theme path


        // here if you pass `mob theme` path then
        // then the theme that you pass into ->  Theme::init('mob'); -> which is in appServiceProvider
        // should be `mob` theme -> Theme::init('mob');

        //OR
        // Tips Hack it
        // just change all theme config name into default
        // go inside config 'name' => 'mob', into 'name' => 'default', to all theme
        // and init `default` theme like this Theme::init('default');
        // now you can change theme path (appServiceProvider.php) Config::set('theme.path', $mob);
        // as you desire without caring this file(themeSelector.php) Theme::init('default');


        $default = base_path('themes/default');
        $mob = base_path('themes/mob');
        Config::set('theme.path', $default);
    }



}
