<?php

namespace App\patterns\factory\Demo1\situation;

class WhatsappNotification
{
    public function send($message) {
        echo "WhatsApp enviado: $message";
    }
}