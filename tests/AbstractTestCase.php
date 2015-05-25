<?php

namespace JustPark\Tests\Deploy;

use GrahamCampbell\TestBench\AbstractPackageTestCase;

/**
 * This is the abstract test class.
 *
 * @author Vincent Klaiber <hello@vinkla.com>
 */
abstract class AbstractTestCase extends AbstractPackageTestCase
{
    /**
     * Get the service provider class.
     *
     * @param \Illuminate\Contracts\Foundation\Application $app
     *
     * @return string
     */
    protected function getServiceProviderClass($app)
    {
        return 'JustPark\Deploy\ServiceProviders\EnvoyerServiceProvider';
    }
}
