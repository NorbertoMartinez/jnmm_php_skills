<?php

namespace App\patterns\facade\Demo1\solution;

class TokenService {
    public function generate() {
        echo "Generating token\n";
        return "TOKEN123";
    }
}