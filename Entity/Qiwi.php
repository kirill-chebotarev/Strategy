<?php


namespace Entity;

use Contract\IPaymentSystem;


class Qiwi implements IPaymentSystem
{
    public function makePayment(string $phoneNumber, int $totalAmount)
    {
        echo "Оплата на сумму {$totalAmount} через Qiwi" . PHP_EOL;
        return 'success';
    }
}