<?php

namespace Initred\NeoBlade\Tests;

use Initred\NeoBlade\NeoBladeServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [
            NeoBladeServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('neo-blade', require __DIR__.'/../config/neo-blade.php');
    }
}
