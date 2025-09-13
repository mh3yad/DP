<?php

namespace App\Structural\Adapter;

class Json
{
    private string $data;
    public function __construct(string $data)
    {
        $this->data = json_encode($data, true);
    }
    public function getData(): string
    {
        return $this->data;
    }

    public function setData(string $data): void
    {
        $this->data = $data;
    }
}