<?php
namespace App\Structural\Adapter;
class XML
{
    public function print(\SimpleXMLElement $XMLElement): bool|string
    {
        return $XMLElement->asXML();
    }
}