<?php

namespace App\patterns\singleton\Demo2\solution;

use App\patterns\singleton\Demo2\solution\Drivers\DatabaseConnection;

class PatientService
{
    public function getPatients() {
        $db = DatabaseConnection::getInstance()->getConnection();
        $db->query("SELECT * FROM patients");
        return $db->fetch();
    }
}