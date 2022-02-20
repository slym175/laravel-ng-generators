<?php

namespace Studio3s\Generators;

use Illuminate\Support\ServiceProvider;

class LaravelServiceProvider extends ServiceProvider
{
    /**
     * Boot the service provider.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/generators.php' => config_path('generators.php'),
        ]);
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->commands([
            'Studio3s\Generators\Console\Commands\AngularConfig',
            'Studio3s\Generators\Console\Commands\AngularDialog',
            'Studio3s\Generators\Console\Commands\AngularComponent',
            'Studio3s\Generators\Console\Commands\AngularDirective',
            'Studio3s\Generators\Console\Commands\AngularPage',
            'Studio3s\Generators\Console\Commands\AngularFilter',
            'Studio3s\Generators\Console\Commands\AngularService',
            'Studio3s\Generators\Console\Commands\PwaManifest',
        ]);

        $this->mergeConfigFrom(__DIR__.'/../config/generators.php', 'generators');
    }
}
