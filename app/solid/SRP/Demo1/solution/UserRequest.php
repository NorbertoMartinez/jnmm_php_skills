<?php

namespace App\solid\SRP\Demo1\solution;

class UserRequest
{

    public function validateEmail($email)
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }

}