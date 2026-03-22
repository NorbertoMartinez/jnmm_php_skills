<?php

namespace App\solid\SRP\Demo1\solution;

class EmailService
{
    /**
     * Communication responsability
     *
     * @param User $user
     * @return void
     */
    public function sendWelcomeEmail(User $user): void
    {
        mail($user->email, "Bienvenido", "Gracias por registrarte");
    }
}