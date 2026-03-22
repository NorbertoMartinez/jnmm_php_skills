<?php

use App\solid\OCP\Demo1\situation\PaymentProcessor;

$payment = new PaymentProcessor();
echo $payment->pay('card', 100);