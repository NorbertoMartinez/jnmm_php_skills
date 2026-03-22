<?php

namespace App\patterns\singleton\Demo2\solution;

use App\patterns\singleton\Demo2\solution\Drivers\DatabaseConnection;

class DoctorService
{

    public function getDoctors() {

        $db = DatabaseConnection::getInstance()->getConnection();
        $db->query("SELECT * FROM doctors")->fetch();
        return $db->fetch();
    }
}