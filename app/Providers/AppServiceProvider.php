<?php

namespace App\Providers;

use App\DomainSetting;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;


class AppServiceProvider extends ServiceProvider
{
    private $current_theme;
    private $has_domain_setting_table = false;


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
        if (Schema::hasTable('domain_settings')) {
            $this->has_domain_setting_table = true;
            $this->current_theme = DomainSetting::where('domain_name', request()->getHttpHost())->first();
        }
        $this->changeThemePath();

    }

    public function changeThemePath(){
        $default = base_path('themes/default');
        $jivan = base_path('themes/jivan');
        Config::set('theme.path', $jivan);
    }



}
