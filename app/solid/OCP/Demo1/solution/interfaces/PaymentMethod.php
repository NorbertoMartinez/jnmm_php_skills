<?php

namespace App\solid\OCP\Demo1\solution\interfaces;

interface PaymentMethod
{
    public function pay($amount);
}