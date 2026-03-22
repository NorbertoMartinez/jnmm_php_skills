<?php

namespace App\solid\OCP\Demo1\situation;

class PaymentProcessor
{
    public function pay($method, $amount)
    {
        if ($method === 'card') {
            return "Pagando $amount con tarjeta";
        }

        if ($method === 'paypal') {
            return "Pagando $amount con PayPal";
        }
    }
}

