<?php


namespace Entity;


use Contract\IPaymentSystem;

class Payment
{
    private $phoneNumber;
    private $totalAmount;

    public function __construct(string $phoneNumber, int $totalAmount)
    {
        $this->phoneNumber = $phoneNumber;
        $this->totalAmount = $totalAmount;
    }

    public function completePayment(IPaymentSystem $paymentSystem)
    {
        return $paymentSystem->makePayment($this->phoneNumber, $this->totalAmount);
    }

}