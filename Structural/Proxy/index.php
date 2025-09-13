<?php
require_once "../../vendor/autoload.php";

use App\Structural\Proxy\SMSProxy;
$smsProxy = new SMSProxy();

echo $smsProxy->sendSMS(1, 010, "marhaba");
echo $smsProxy->sendSMS(1, 010, "marhaba");
echo $smsProxy->sendSMS(1, 010, "marhaba");
