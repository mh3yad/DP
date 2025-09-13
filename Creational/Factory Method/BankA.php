<?php

namespace App\Creational\Factory;

class BankA implements IBank
{

    public function deposite(): string
    {
        return "Deposite from Bank A\n";
    }
}