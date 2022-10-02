<?php

namespace Authanram\LaravelAssets;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Authanram\LaravelAssets\Commands\LaravelAssetsCommand;

class LaravelAssetsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-assets')
            ->hasConfigFile()
            ->hasViews()
            ->hasCommand(LaravelAssetsCommand::class);
    }
}
