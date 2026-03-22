<?php

namespace App\solid\SRP\Demo2\situation;

class SalesReport {

    public function generateReport($sales)
    {
        $total = 0;

        foreach ($sales as $sale) {
            $total += $sale["amount"];
        }

        return [
            "date" => date("Y-m-d"),
            "total_sales" => $total
        ];
    }

    public function saveToFile($report)
    {
        $file = fopen("report.txt", "w");

        fwrite($file, "Fecha: " . $report["date"] . "\n");
        fwrite($file, "Total ventas: " . $report["total_sales"] . "\n");

        fclose($file);
    }

    public function printReport($report)
    {
        echo "Fecha: " . $report["date"] . "\n";
        echo "Total ventas: " . $report["total_sales"] . "\n";
    }
}