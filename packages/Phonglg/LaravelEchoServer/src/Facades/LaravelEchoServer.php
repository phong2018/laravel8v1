<?php

namespace Phonglg\LaravelEchoServer\Facades;

use Illuminate\Support\Facades\Facade;

class LaravelEchoServer extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'laravelechoserver';
    }
}
