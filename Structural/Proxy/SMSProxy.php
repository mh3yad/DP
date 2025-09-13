<?php

namespace App\Structural\Proxy;

class SMSProxy extends SMSService
{
    private ?ConcereteSMSService $concereteSMSService = null;
    public array $custMessagesLimit = [];


    public function sendSMS(int $cusId, string $receiverNumber, string $message): string
    {
        if (is_null($this->concereteSMSService)) {
            $this->concereteSMSService = new ConcereteSMSService();
        }
        if (!isset($this->custMessagesLimit[$cusId])) {
            $this->custMessagesLimit[$cusId] = 1;
            return $this->concereteSMSService->sendSMS($cusId, $receiverNumber, $message);
        } else {
            if ($this->custMessagesLimit[$cusId] >= 2) {
                return "Message limit exceeded for Customer Id $cusId";
            } else {
                $this->custMessagesLimit[$cusId]++;
                return $this->concereteSMSService->sendSMS($cusId, $receiverNumber, $message);
            }
        }
    }
}
