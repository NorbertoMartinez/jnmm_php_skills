<?php

namespace App\solid\SRP\Demo2\solution;

class ReportPrinter
{
    public function printReport($report)
    {
        echo "Fecha: " . $report["date"] . "\n";
        echo "Total ventas: " . $report["total_sales"] . "\n";
    }
}