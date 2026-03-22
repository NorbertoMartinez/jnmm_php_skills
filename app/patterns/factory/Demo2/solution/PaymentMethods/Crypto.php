<?php

namespace App\patterns\factory\Demo2\solution\PaymentMethods;

use App\patterns\factory\Demo2\solution\interfaces\PaymentInterface;

class Crypto implements PaymentInterface
{

    public function pay($amount)
    {
        echo "Procesando pago con Crypto: $amount";
    }
}