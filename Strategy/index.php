<?php

namespace Strategy;

use Strategy\Service\OrderPay;
use Strategy\Payment\QiwiPayment;
use Strategy\Payment\YandexPayment;
use Strategy\Payment\WebMoneyPayment;

spl_autoload_register(function ($className) {
    $className = str_replace("\\", DIRECTORY_SEPARATOR, $className);
    $className = preg_replace('/^Strategy/', '', $className);
    require_once __DIR__ . $className . '.php';
});

$orderPay = new OrderPay();

$pay = $orderPay->toPay(new QiwiPayment(), 2000, "790011111111"); 

$pay = $orderPay->toPay(new YandexPayment(), 2000, "790011111111");

$pay = $orderPay->toPay(new WebMoneyPayment(), 2000, "790011111111");