<?php

namespace Humweb\Passwordless\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Humweb\Passwordless\Passwordless
 */
class Passwordless extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Humweb\Passwordless\Passwordless::class;
    }
}
