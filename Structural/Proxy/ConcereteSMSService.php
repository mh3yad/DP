<?php

namespace App\Structural\Proxy;

class ConcereteSMSService extends SMSService
{

    public function sendSMS(int $cusId, string $receiverNumber, string $message): string
    {
        return "Customer Id $cusId sent message $message to number $receiverNumber\n";
    }
}