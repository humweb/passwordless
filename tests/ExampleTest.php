<?php

use Humweb\Passwordless\Facades\Passwordless;

it('can test', function () {
    expect(true)->toBeTrue();
    Passwordless::url(['username' => 'ryun@letsgolearn.com'], now()->addDays(2));
});
