<?php

namespace Phonglg\LaravelEchoServer;

use Illuminate\Support\Facades\Broadcast;
use Illuminate\Support\ServiceProvider;

class LaravelEchoServerServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot(): void
    {
         
        //Broadcast::routes(['middleware' => ['web', 'auth']]);
        
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php'); 
        $this->loadRoutesFrom(__DIR__ . '/../routes/channels.php'); 
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'laravelechoserver');
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'phonglg');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        // Publishing is only necessary when using the CLI.
        if ($this->app->runningInConsole()) {
            $this->bootForConsole();
        }
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/laravelechoserver.php', 'laravelechoserver');

        // Register the service the package provides.
        $this->app->singleton('laravelechoserver', function ($app) {
            return new LaravelEchoServer;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['laravelechoserver'];
    }

    /**
     * Console-specific booting.
     *
     * @return void
     */
    protected function bootForConsole(): void
    {
        // Publishing the configuration file.
        $this->publishes([
            __DIR__.'/../config/laravelechoserver.php' => config_path('laravelechoserver.php'),
        ], 'laravelechoserver.config');

        // Publishing the views.
        /*$this->publishes([
            __DIR__.'/../resources/views' => base_path('resources/views/vendor/phonglg'),
        ], 'laravelechoserver.views');*/

        // Publishing assets.
        /*$this->publishes([
            __DIR__.'/../resources/assets' => public_path('vendor/phonglg'),
        ], 'laravelechoserver.views');*/

        // Publishing the translation files.
        /*$this->publishes([
            __DIR__.'/../resources/lang' => resource_path('lang/vendor/phonglg'),
        ], 'laravelechoserver.views');*/

        // Registering package commands.
        // $this->commands([]);
    }
}
