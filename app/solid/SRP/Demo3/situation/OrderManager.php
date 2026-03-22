<?php

namespace App\solid\SRP\Demo3\situation;

class OrderManager {

    public function calculateTotal($items)
    {
        $total = 0;

        foreach ($items as $item) {
            $total += $item["price"] * $item["quantity"];
        }

        return $total;
    }

    public function saveOrder($order)
    {
        $pdo = new PDO("mysql:host=localhost;dbname=store", "root", "");

        $stmt = $pdo->prepare(
            "INSERT INTO orders (customer,total) VALUES (:customer,:total)"
        );

        $stmt->execute([
            "customer" => $order["customer"],
            "total" => $order["total"]
        ]);
    }

    public function sendInvoice($email, $total)
    {
        $message = "Tu pedido fue procesado. Total: $" . $total;

        mail($email, "Factura de compra", $message);
    }
}