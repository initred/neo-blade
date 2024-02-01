<?php

namespace Initred\NeoBlade;

use Initred\NeoBlade\Commands\NeoBladeCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class NeoBladeServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('neo-blade')
            ->hasConfigFile()
            ->hasViews()
            ->hasCommand(NeoBladeCommand::class);
    }
}
