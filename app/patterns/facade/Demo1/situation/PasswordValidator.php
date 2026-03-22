<?php

namespace App\patterns\facade\Demo1\situation;

class PasswordValidator {
    public function verify($password, $hash) {
        echo "Validating password\n";
        return $password === $hash;
    }
}