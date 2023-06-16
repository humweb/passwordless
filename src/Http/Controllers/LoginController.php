<?php

declare(strict_types=1);

namespace Humweb\Passwordless\Http\Controllers;

use Humweb\Passwordless\Auth\AuthManager;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

final class LoginController
{
    public function __invoke(Request $request, AuthManager $manager): RedirectResponse
    {
        if (! $request->hasValidSignature()) {
            abort(Response::HTTP_UNAUTHORIZED);
        }

        $userModel = config('passwordless.user_model');

        /**
         * @var Authenticatable $user
         */
        $user = $userModel::query()->where($request->only(config('passwordess.parameters'))->all())->firstOrFail();

        $manager->login($user);

        return redirect(config('passwordless.redirect'));
    }
}
