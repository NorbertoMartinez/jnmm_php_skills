<?php

namespace App\patterns\factory\Demo2\situation;

class PaymentService
{
    public function pay(string $method, float $amount)
    {
        if ($method === 'card') {

            echo "Procesando pago con tarjeta: $amount";

        } elseif ($method === 'paypal') {

            echo "Procesando pago con PayPal: $amount";

        } elseif ($method === 'crypto') {

            echo "Procesando pago con Crypto: $amount";

        } else {
            throw new Exception("Método no soportado");
        }
    }
}