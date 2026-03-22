<?php

namespace App\patterns\facade\Demo1\solution;

class PasswordValidator {
    public function verify($password, $hash) {
        echo "Validating password\n";
        return $password === $hash;
    }
}