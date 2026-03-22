<?php

namespace App\patterns\factory\Demo2\solution;

use App\patterns\factory\Demo2\solution\interfaces\PaymentInterface;
use App\patterns\factory\Demo2\solution\PaymentMethods\Card;

class PaymentFactory
{
    private static array $map = [
        "card" => Card::class
    ];

    public static function create($method): PaymentInterface{
        if(!isset(self::$map[$method]))
            throw new \Exception("");

        $class = self::$map[$method];
        return new $class();
    }
}