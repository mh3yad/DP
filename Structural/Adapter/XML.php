<?php
namespace App\Adapter;
class XML
{
    public function print(\SimpleXMLElement $XMLElement): bool|string
    {
        return $XMLElement->asXML();
    }
}