<?php

namespace App\solid\SRP\Demo3\solution;

class OrderCalculator
{

    /**
     * @param array $items
     * @return float
     */
    public function calculateTotal(array $items): float
    {
        $total = 0;

        foreach ($items as $item) {
            $total += $item["price"] * $item["quantity"];
        }

        return $total;
    }
}