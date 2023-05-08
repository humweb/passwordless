<?php

namespace Humweb\Passwordless\Auth;

use Illuminate\Support\Manager;

class AuthManager extends Manager
{
    public function createLaravelDriver()
    {
        return new LaravelDriver();
    }

    public function createSentinelDriver()
    {
        return new SentinelDriver();
    }

    public function getDefaultDriver()
    {
        return config('passwordless.driver');
    }
}
