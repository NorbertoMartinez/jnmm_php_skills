<?php

namespace App\solid\SRP\Demo3\solution;

class OrderRepository
{
    protected $db = null;

    /**
     * Singleton Pattern
     */
    public function __construct(){
        if(!$this->db)
            $this->db = new PDO("mysql:host=localhost;dbname=store", "root", "");
    }

    /**
     * @param Order $order
     * @return void
     */
    public function save(Order $order): void
    {
        $stmt = $this->db->prepare(
            "INSERT INTO orders (customer,total) VALUES (:customer,:total)"
        );

        $stmt->execute($order);
    }
}