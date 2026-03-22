<?php

namespace App\patterns\facade\Demo1\solution;

class UserRepository {
    public function findByEmail($email) {
        echo "Searching user\n";
        return ['email'=>$email,'password'=>'123456'];
    }
}