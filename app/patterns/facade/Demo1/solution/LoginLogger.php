<?php

namespace App\patterns\facade\Demo1\solution;

class LoginLogger {
    public function log($email) {
        echo "Login logged for $email\n";
    }
}