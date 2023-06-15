<?php

namespace Humweb\Passwordless\Actions;

use Humweb\Passwordless\Mail\Auth\LoginLink;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\URL;

final class SendLoginLink
{
    public function handle(string $email): void
    {
        Mail::to(
            users: $email,
        )->send(
            mailable: new LoginLink(
                url: URL::signedRoute(
                    name: 'login:store',
                    parameters: [
                        'email' => $email,
                        'email' => $email,
                    ],
                    expiration: 3600,
                ),
            )
        );
    }
}
