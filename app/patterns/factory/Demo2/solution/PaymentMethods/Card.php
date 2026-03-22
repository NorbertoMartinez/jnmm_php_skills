<?php

namespace App\patterns\factory\Demo2\solution\PaymentMethods;

use App\patterns\factory\Demo2\solution\interfaces\PaymentInterface;

class Card implements PaymentInterface
{

    public function pay($amount)
    {
        echo "Procesando pago con tarjeta: $amount";
    }
}