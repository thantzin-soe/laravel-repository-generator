<?php

namespace TZS\LaravelRepositoryGenerator;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use TZS\LaravelRepositoryGenerator\Commands\MakeRepository;
use TZS\LaravelRepositoryGenerator\Commands\MakeRepositoryInterface;

class RepositoryGeneratorServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */

        $package
            ->name('laravel-repository-generator')
            ->hasCommands([
                MakeRepository::class,
                MakeRepositoryInterface::class
            ]);
    }
}
