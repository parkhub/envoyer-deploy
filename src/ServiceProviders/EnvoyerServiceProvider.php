<?php

namespace JustPark\Deploy\ServiceProviders;

use Illuminate\Support\ServiceProvider;

class EnvoyerServiceProvider extends ServiceProvider
{
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
