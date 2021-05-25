<?php

namespace Hhhoegsted\LaravelRemote;

use Hhhoegsted\LaravelRemote\Commands\LaravelRemoteCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelRemoteServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-remote')
            ->hasConfigFile()
            ->hasCommand(LaravelRemoteCommand::class);
    }
}
