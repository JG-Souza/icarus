<?php

namespace Jgsouza\Icarus;

use Illuminate\Support\ServiceProvider;

class IcarusServiceProvider extends ServiceProvider
{

    public function register()
    {
        //
    }

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/resources/views', 'icarus');

        // Publicar views
        $this->publishes([
            __DIR__.'/resources/views' => resource_path('views/vendor/icarus'),
        ], 'views');
    }
}
