<?php


namespace Contract;


interface IPaymentSystem
{
    public function makePayment(string $phoneNumber, int $totalAmount);

}