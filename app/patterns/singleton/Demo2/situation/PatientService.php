<?php

namespace App\patterns\singleton\Demo2\situation;

class PatientService {

    public function getPatients() {
        $db = new PDO("mysql:host=localhost;dbname=hospital", "root", "");
        $stmt = $db->query("SELECT * FROM patients");
        return $stmt->fetchAll();
    }

}