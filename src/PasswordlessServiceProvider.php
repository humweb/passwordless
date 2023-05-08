<?php

namespace Humweb\Passwordless;

use Humweb\Passwordless\Http\Middleware\ValidateSignature;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class PasswordlessServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('passwordless')
            ->hasRoute('web')
            ->hasConfigFile();

        app('router')->aliasMiddleware('signed-login', ValidateSignature::class);
    }
}
