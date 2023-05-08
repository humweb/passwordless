<?php

namespace Humweb\Passwordless\Auth;

use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

abstract class Driver
{
    abstract public function login(AuthenticatableContract $user);
}
