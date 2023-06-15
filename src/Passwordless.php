<?php

namespace Humweb\Passwordless;

use Illuminate\Support\Facades\URL;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class Passwordless
{
    public function url(array $params, \DateTimeInterface|\DateInterval|int|null $expires = 3600): string
    {
        return URL::signedRoute(
            name: 'login.signed',
            parameters: $params,
            expiration: $expires,
        );
    }

    public function qrCode(string $url, int|string $size = 256, string $format = 'png'): string
    {
        return '<img src="data:image/png;base64, '.base64_encode(QrCode::format($format)
            ->size($size)
            ->generate($url)).'">';
    }
}
