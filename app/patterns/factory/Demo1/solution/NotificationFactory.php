<?php

namespace App\patterns\factory\Demo1\solution;
use App\patterns\factory\Demo1\solution\interfaces\NotificationInterface;

use App\patterns\factory\Demo1\solution\Notifications\EmailNotification;
use App\patterns\factory\Demo1\solution\Notifications\SMSNotification;
use App\patterns\factory\Demo1\solution\Notifications\WhatsappNotification;

class NotificationFactory
{

    public static function create(string $type): NotificationInterface
    {
        return match ($type){
            "email" => new EmailNotification(),
            "whatsapp" => new WhatsappNotification,
            "sms" => new SMSNotification,
            default => throw new \Exception("")
        };
    }

}