<?php


namespace Entity;

use Contract\IPaymentSystem;


class WebMoney implements IPaymentSystem
{
    public function makePayment(string $phoneNumber, int $totalAmount)
    {
        echo "Оплата на сумму {$totalAmount} через WebMoney" . PHP_EOL;
        return 'success';
    }
}