<?php

namespace App\patterns\factory\Demo2\solution;

class PaymentService
{

    /**
     * @param string $method
     * @param float $amount
     * @return void
     * @throws \Exception
     */
    public function pay(string $method, float $amount):void
    {
        $paymentFactory = PaymentFactory::create($method);
        $paymentFactory->pay($amount);
    }
}