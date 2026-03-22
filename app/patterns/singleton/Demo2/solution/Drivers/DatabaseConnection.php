<?php

namespace App\patterns\singleton\Demo2\solution\Drivers;

use PDO;

class DatabaseConnection
{

    private static ?self $instance;
    protected ?PDO $db = null;
    protected $stmt;

    /**
     * private constructor
     */
    private function __construct(){
        if(!$this->db)
            $this->connect();
    }

    /**
     * Singleton
     * @return self
     */
    public static function getInstance()
    {
        if(!self::$instance)
            self::$instance = new self();

        return self::$instance;
    }

    /**
     * @return mixed|null
     */
    public function getConnection(){
        return $this->db;
    }

    /**
     * @return void
     */
    public function connect(){
        $this->db = new PDO("mysql:host=localhost;dbname=hospital",
            "root", ""
        );
    }

    /**
     * @param string|null $query
     * @return $this
     */
    public function query(string $query = null){
        if($query)
            $this->stmt = $this->db->query($query);

        return $this;
    }

    /**
     * @return mixed
     */
    public function fetch(){
        return $this->stmt->fetchAll();
    }


    /**
     * @return void
     */
    private function __clone() {}

    /**
     * @return mixed
     * @throws \Exception
     */
    public function __wakeup(){
        throw new \Exception("Cannot unserialize singleton");
    }
}