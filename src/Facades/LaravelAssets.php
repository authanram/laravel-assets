<?php

namespace Authanram\LaravelAssets\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Authanram\LaravelAssets\LaravelAssets
 */
class LaravelAssets extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Authanram\LaravelAssets\LaravelAssets::class;
    }
}
