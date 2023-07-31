<?php

use Humweb\Passwordless\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::middleware(['guest'])->domain(config('urls.frontend'))->group(function () {
    Route::get(
        'login/signed',
        LoginController::class,
    )->middleware('signed')->name('login.signed');
});
