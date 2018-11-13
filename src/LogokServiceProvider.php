<?php

namespace Hongen\Logok;

use Illuminate\Support\ServiceProvider;

class LogokServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        dd(1);
        $this->loadMigrationsFrom(__DIR__.'/../migrations');


    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('logok', function () {
            return new Logok;
        });
    }
}
