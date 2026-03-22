<?php

namespace App\patterns\factory\Demo2\solution\PaymentMethods;

use App\patterns\factory\Demo2\solution\interfaces\PaymentInterface;

class Transfer implements PaymentInterface
{

    public function pay($amount)
    {
        // Nuevo
        echo "Procesando pago con Transferencia: $amount";
    }
}