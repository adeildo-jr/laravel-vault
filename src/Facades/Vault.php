<?php

namespace Amorim\Vault\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Amorim\Vault\Vault
 */
class Vault extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Amorim\Vault\Vault::class;
    }
}
