<?php

namespace App\Singleton;

class CurrencyConverter
{
    /** @var ExchangeRate[] */
    private ExchangeRate|array $exchangeRate = [];

    static CurrencyConverter|null $_instance = null;

    private function __construct()
    {
        $this->loadExchangeRates();
    }

    public static function getInstance(): self
    {
        if (is_null(self::$_instance)) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }
    private function loadExchangeRates(): void
    {
        echo "\n Loading rates\n";
        sleep(5);
        $this->exchangeRate = [
            new ExchangeRate("USD", "EGP", 48.5),
            new ExchangeRate("SAR", "EGP", 13.5),
            new ExchangeRate("USD", "SAR", 3.7),
        ];
    }

    public function convert(string $baseCurrency, string $targetCurrency, float $amount): bool
    {
        $exchangeRate = current(array_filter($this->exchangeRate, function ($rate) use ($baseCurrency, $targetCurrency) {
            if ($baseCurrency == $rate->getBaseCurrency() && $targetCurrency == $rate->getTargetCurrency()) {
                return $rate;
            }
            return false;
        }));

        if ($exchangeRate) {
            echo "converted value from $baseCurrency to $targetCurrency is = " . $exchangeRate->getRate() * $amount . "\n";
            return true;
        }
        echo new \Exception("Cannot convert {$baseCurrency} to {$targetCurrency}");
        return false;
    }
}
