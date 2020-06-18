<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if (config('data-gov.source') == 'API') {
            $this->app->singleton('App\Services\DataGov\PullDataService', 'App\Services\DataGov\Api\PullDataServiceApi');
        } else {
            $this->app->singleton('App\Services\DataGov\PullDataService', 'App\Services\DataGov\File\PullDataServiceFile');
        }
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
