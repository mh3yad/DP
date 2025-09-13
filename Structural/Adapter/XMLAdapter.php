<?php

namespace App\Structural\Adapter;

class XMLAdapter
{
    private Json $json;
    private \SimpleXMLElement $data;
    public function __construct(Json $json)
    {
        $this->json = $json;
        $this->data = simplexml_load_string("<root>" . htmlspecialchars($this->json->getData()) . "</root>");
    }
    public function getData(): \SimpleXMLElement
    {
        return $this->data;
    }


}