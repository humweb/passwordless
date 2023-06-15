<?php

// config for Humweb/Passwordless
return [
    'user_model' => \LGL\Auth\Users\EloquentUser::class,
    'driver' => 'sentinel',
    'parameters' => ['username', 'client_id'],
    'redirect' => '',
];
