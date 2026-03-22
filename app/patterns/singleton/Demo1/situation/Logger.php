<?php

namespace App\patterns\singleton\Demo1\situation;

class Logger {
    public function log($message) {
        file_put_contents("app.log", $message . PHP_EOL, FILE_APPEND);
    }
}