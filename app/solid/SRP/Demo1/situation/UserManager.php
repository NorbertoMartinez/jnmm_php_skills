<?php

namespace App\solid\SRP\Demo1\situation;

use App\solid\SRP\Demo1\Exception;
use App\solid\SRP\Demo1\PDO;

class UserManager {

    public function createUser($name, $email, $password)
    {
        if (!$this->validateEmail($email)) {
            throw new Exception("Email inválido");
        }

        $user = [
            "name" => $name,
            "email" => $email,
            "password" => password_hash($password, PASSWORD_BCRYPT)
        ];

        $this->saveToDatabase($user);

        $this->sendWelcomeEmail($email);
    }

    private function validateEmail($email)
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }

    private function saveToDatabase($user)
    {
        $pdo = new PDO("mysql:host=localhost;dbname=test", "root", "");

        $stmt = $pdo->prepare(
            "INSERT INTO users (name,email,password) VALUES (:name,:email,:password)"
        );

        $stmt->execute($user);
    }

    private function sendWelcomeEmail($email)
    {
        mail($email, "Bienvenido", "Gracias por registrarte");
    }
}