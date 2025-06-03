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
        
        // Publicando views
        $this->publishes([
            __DIR__.'/../views' => resource_path('views/vendor/icarus'),
        ], 'icarus-views');
    }

    public function register()
    {
        if (config('auth.providers.users')) {
            config([
                'auth.providers.users.model' => \Jgsouza\Icarus\Models\User::class,
            ]);
        }

        if (!config('auth.guards.api')) {
            config([
                'auth.guards.api' => [
                    'driver' => 'jwt',
                    'provider' => 'users',
                ],
            ]);
        }
    }
}