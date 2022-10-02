<?php

namespace Authanram\LaravelAssets;

use Authanram\LaravelAssets\Commands\LaravelAssetsCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

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
