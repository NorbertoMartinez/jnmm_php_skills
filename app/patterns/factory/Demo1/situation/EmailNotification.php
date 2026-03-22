<?php

namespace App\patterns\factory\Demo1\situation;

class EmailNotification
{
    public function send($message) {
        echo "Email enviado: $message";
    }
}