<?php
namespace App\Singleton;

class ExchangeRate
{

    private string $baseCurrency;
    private string $targetCurrency;
    private float $rate;

    public function __construct(string $baseCurrency, string $targetCurrency, float $rate)
    {
        $this->baseCurrency = $baseCurrency;
        $this->targetCurrency = $targetCurrency;
        $this->rate = $rate;
    }

    public function getBaseCurrency(): string
    {
        return $this->baseCurrency;
    }

    public function getTargetCurrency(): string
    {
        return $this->targetCurrency;
    }

    public function getRate(): float
    {
        return $this->rate;
    }
    
}