<?php

namespace Jgsouza\Icarus\Providers;

use Illuminate\Support\ServiceProvider;

class IcarusProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     * 
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        $this->loadRoutesFrom(__DIR__.'/../routes/api.php');
        $this->loadViewsFrom(__DIR__.'/../views', 'icarus');
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
    }
}