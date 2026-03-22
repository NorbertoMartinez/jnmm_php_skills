<?php

namespace App\solid\OCP\Demo1\solution\PaymentMethods;

use App\solid\OCP\Demo1\solution\interfaces\PaymentMethod;

class CardPayment implements PaymentMethod
{

    public function pay($amount)
    {
        return "Pagando $amount con tarjeta";
    }
}