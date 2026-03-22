<?php

namespace App\patterns\factory\Demo1\situation;

class NotificationService {

    public function send($type, $message) {

        if ($type == "email") {
            $service = new EmailNotification();
        } elseif ($type == "sms") {
            $service = new SmsNotification();
        } elseif ($type == "whatsapp") {
            $service = new WhatsappNotification();
        }

        $service->send($message);
    }
}