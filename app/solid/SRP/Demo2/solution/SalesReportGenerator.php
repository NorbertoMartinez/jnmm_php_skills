<?php

namespace App\solid\SRP\Demo2\solution;

class SalesReportGenerator
{
    protected $total = 0;

    public function generateReport($sales): array
    {
        foreach ($sales as $sale) {
            $total += $sale["amount"];
        }

        return [
            "date" => date("Y-m-d"),
            "total_sales" => $total
        ];
    }

}