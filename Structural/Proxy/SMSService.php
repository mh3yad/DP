<?php

namespace App\Structural\Proxy;

abstract class SMSService
{
    public abstract function sendSMS(int $cusId, string $receiverNumber, string $message): string;
}