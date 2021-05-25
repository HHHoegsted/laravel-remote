<?php

namespace Hhhoegsted\LaravelRemote;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Hhhoegsted\LaravelRemote\LaravelRemote
 */
class LaravelRemoteFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-remote';
    }
}
