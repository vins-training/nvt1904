<?php

namespace Nvt1904\Qltt;

use Illuminate\Support\ServiceProvider;

class QlttServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
        if (! $this->app->routesAreCached()) {
            require __DIR__.'/routes/route.php';
        }
        $this->loadViewsFrom(__DIR__ . '/views', 'Qltt');
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
