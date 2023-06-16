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

    public function qrCode(string $url, int|string $size = 256, string $format = 'svg'): string
    {
        $prefix = $format == 'svg' ? 'data:image/svg+xml;base64, ' : 'data:image/png;base64, ';

        return '<img src="'.$prefix.base64_encode(QrCode::format($format)
            ->size($size)
            ->generate($url)).'">';
    }
}
