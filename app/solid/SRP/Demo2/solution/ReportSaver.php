<?php

namespace App\solid\SRP\Demo2\solution;

class ReportSaver
{
    public function saveToFile($report): void
    {
        $file = fopen("report.txt", "w");

        fwrite($file, "Fecha: " . $report["date"] . "\n");
        fwrite($file, "Total ventas: " . $report["total_sales"] . "\n");

        fclose($file);
    }
}