<?php

namespace JustPark\Deploy\ServiceProviders;

use Illuminate\Support\ServiceProvider;

class EnvoyerServiceProvider extends ServiceProvider
{
    /**
     * Boot the service provider.
     *
     * @return void
     */
    public function boot()
    {
        $this->setupConfig();
    }

    /**
     * Setup the config.
     *
     * @return void
     */
    protected function setupConfig()
    {
        $source = realpath(__DIR__.'/../../config/envoyer.php');

        $this->publishes([$source => config_path('envoyer.php')]);

        $this->mergeConfigFrom($source, 'envoyer');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        // Register deploy command.
        $this->commands(['JustPark\Deploy\Commands\EnvoyerDeployCommand']);
    }
}
