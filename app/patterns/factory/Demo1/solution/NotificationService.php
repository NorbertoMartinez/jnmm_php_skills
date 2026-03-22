<?php

namespace App\patterns\factory\Demo1\solution;

class NotificationService
{

    public function send(string $message, string $type){
        $notification = NotificationFactory::create($type);
        $notification->send($message);
    }
}