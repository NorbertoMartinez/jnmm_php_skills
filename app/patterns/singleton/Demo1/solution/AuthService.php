<?php

namespace App\patterns\singleton\Demo1\solution;

class AuthService
{
    public function login($user) {
        $logger = Logger::getInstance();
        $logger->log("User $user logged in");
    }
}