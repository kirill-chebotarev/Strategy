<?php


namespace Entity;

use Contract\IPaymentSystem;


class Yandex implements IPaymentSystem
{
    public function makePayment(string $phoneNumber, int $totalAmount)
    {
        echo "Оплата на сумму {$totalAmount} через Yandex" . PHP_EOL;
        return 'success';
    }
}