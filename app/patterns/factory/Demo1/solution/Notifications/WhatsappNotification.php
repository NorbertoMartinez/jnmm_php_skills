<?php

namespace App\patterns\factory\Demo1\solution\Notifications;

use App\patterns\factory\Demo1\solution\interfaces\NotificationInterface;

class WhatsappNotification implements NotificationInterface
{

    public function send(string $message): void
    {
        echo "WhatsApp enviado: $message";
    }
}