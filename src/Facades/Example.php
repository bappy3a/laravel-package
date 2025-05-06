<?php

namespace Bappy3a\Example\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Bappy3a\Example\Example
 */
class Example extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Bappy3a\Example\Example::class;
    }
}
