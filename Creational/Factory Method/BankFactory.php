<?php

namespace App\Creational\Factory;

class BankFactory implements IBankFactory
{

    public function getBank($code): IBank|null
    {
        return match ($code) {
            123 => new BankA(),
            456 => new BankB(),
            default => null,
        };
    }
}