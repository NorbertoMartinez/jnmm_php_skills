<?php

namespace App\patterns\singleton\Demo1\situation;

class AuthService {
    public function login($user) {
        $logger = new Logger();
        $logger->log("User $user logged in");
    }
}