<?php

require_once("../vendor/autoload.php");

use App\Adapter\Json;
use App\Adapter\XML;
use App\Adapter\XMLAdapter;

$json = new Json("this is json Data");
echo "Json data is = " . $json->getData(). PHP_EOL;

//converting Json to XML with XMK adapter
$XMLAdapter = new XMLAdapter($json);
$xmlParser = new XML();
echo $xmlParser->print($XMLAdapter->getData());
