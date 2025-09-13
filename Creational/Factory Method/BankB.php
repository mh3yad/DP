<?php

namespace App\Creational\Factory;

class BankB implements IBank
{
    public function deposite(): string
    {
       return  "Deposite from Bank B\n";
    }
}