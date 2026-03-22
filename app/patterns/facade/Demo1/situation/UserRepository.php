<?php

namespace App\patterns\facade\Demo1\situation;

class UserRepository {
    public function findByEmail($email) {
        echo "Searching user\n";
        return ['email'=>$email,'password'=>'123456'];
    }
}