<?php

namespace App\patterns\singleton\Demo1\situation;

class PaymentService {
    public function pay($user, $amount) {
        $logger = new Logger();
        $logger->log("User $user paid $amount");
    }
}