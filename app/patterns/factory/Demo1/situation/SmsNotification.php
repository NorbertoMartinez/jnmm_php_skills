<?php

namespace App\patterns\factory\Demo1\situation;

class SmsNotification
{
    public function send($message) {
        echo "SMS enviado: $message";
    }

}