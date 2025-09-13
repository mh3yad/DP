<?php
require_once "../vendor/autoload.php";
use App\Singleton\CurrencyConverter;

$currencyConverter = CurrencyConverter::getInstance()->convert('USD','EGP',50);
$currencyConverter = CurrencyConverter::getInstance()->convert('USD','EGP',50);
$currencyConverter = CurrencyConverter::getInstance()->convert('USD','EGP',50);
$currencyConverter = CurrencyConverter::getInstance()->convert('EGP','USD',50);