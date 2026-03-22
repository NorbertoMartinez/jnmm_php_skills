<?php

namespace App\solid\SRP\Demo3\solution;

class InvoiceService
{
    /**
     * @param string $email
     * @param float $total
     * @return void
     */
    public function sendInvoice(string $email, float $total): void
    {
        $message = "Tu pedido fue procesado. Total: $" . $total;

        mail($email, "Factura de compra", $message);
    }
}