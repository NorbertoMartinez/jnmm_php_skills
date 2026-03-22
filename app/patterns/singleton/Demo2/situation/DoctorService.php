<?php

namespace App\patterns\singleton\Demo2\situation;

class DoctorService {

    public function getDoctors() {
        $db = new PDO("mysql:host=localhost;dbname=hospital", "root", "");
        $stmt = $db->query("SELECT * FROM doctors");
        return $stmt->fetchAll();
    }

}