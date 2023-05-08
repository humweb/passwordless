<?php

namespace Humweb\Passwordless\Auth;

use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Support\Facades\Auth;


class LaravelDriver extends Driver
{

    public function login(AuthenticatableContract $user)
    {
        Auth::login($user);
    }
}
