<?php

namespace App\patterns\factory\Demo1\solution\interfaces;

interface NotificationInterface
{

    public function send(string $message): void;
}