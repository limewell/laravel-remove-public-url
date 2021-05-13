<?php

namespace Limewell\LaravelRemovePublicUrl;

use Illuminate\Support\Facades\Facade;

class LaravelRemovePublicUrlFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'laravel-remove-public-url';
    }
}
