<?php

namespace App\Creational\Factory;

interface IBankFactory
{
    public function getBank($code) : IBank|null;
}