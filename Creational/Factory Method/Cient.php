<?php
declare(strict_types=1);
namespace App\Creational\Factory;


class Cient{
    public IBank $ibank;
    public function doDeposite($code){
        $bankFactory = new BankFactory();
       $this->ibank = $bankFactory->getBank($code);
        return $this->ibank->deposite();
    }
}