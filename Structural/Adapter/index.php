<?php

require_once("../../vendor/autoload.php");

use App\Structural\Adapter\Json;
use App\Structural\Adapter\XML;
use App\Structural\Adapter\XMLAdapter;

$json = new Json("this is json Data");
echo "JSON DATA = " . $json->getData(). PHP_EOL;

//converting Json to XML with XMK adapter
$XMLAdapter = new XMLAdapter($json);
$xmlParser = new XML();
echo "XML DATA = " .$xmlParser->print($XMLAdapter->getData());
