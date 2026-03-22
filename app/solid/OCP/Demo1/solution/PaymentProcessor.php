<?php

namespace App\solid\OCP\Demo1\solution;

use App\solid\OCP\Demo1\solution\interfaces\PaymentMethod;

class PaymentProcessor
{
    public function pay(PaymentMethod $method, $amount): mixed
    {
        return $method->pay($amount);
    }

}