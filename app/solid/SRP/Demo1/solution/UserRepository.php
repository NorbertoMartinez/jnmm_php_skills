<?php

namespace App\solid\SRP\Demo1\solution;

class UserRepository
{
    protected $db = null;

    /**
     * Singleton pattern
     */
    public function __construct(){

        if(!$this->db)
            $this->db = new PDO("mysql:host=localhost;dbname=test", "root", "");
    }

    /**
     * Persistencia
     *
     * @param User $user
     * @return void
     */
    public function save(User $user): void
    {
        $stmt = $this->db->prepare(
            "INSERT INTO users (name,email,password) VALUES (:name,:email,:password)"
        );

        $stmt->execute($user);
    }
}