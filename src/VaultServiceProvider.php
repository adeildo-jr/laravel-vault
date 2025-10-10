<?php

namespace Amorim\Vault;

use Amorim\Vault\Commands\VaultCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class VaultServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-vault')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel_vault_table')
            ->hasCommand(VaultCommand::class);
    }
}
