<?php

namespace Humweb\Passwordless\Auth;

use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use LGL\Auth\Laravel\Facades\Sentinel;


class SentinelDriver extends Driver
{
    public function login(AuthenticatableContract $user)
    {
        Sentinel::loginByUserId($user->id);
    }
}
