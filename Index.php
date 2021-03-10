<?php

use \Entity\Payment;
use \Entity\Qiwi;
use \Entity\Yandex;
use \Entity\WebMoney;

spl_autoload_register(function ($className) {
    $className = str_replace("\\", DIRECTORY_SEPARATOR, $className);

    require_once __DIR__ . '\\' . $className . '.php';
});

$paymentQiwi = new Payment('12345678910', 1500);
$paymentQiwi->completePayment(new Qiwi());

$paymentYandex = new Payment('12345678910', 2000);
$paymentYandex->completePayment(new Yandex());

$paymentWM = new Payment('12345678910', 1000);
$paymentWM->completePayment(new WebMoney());
