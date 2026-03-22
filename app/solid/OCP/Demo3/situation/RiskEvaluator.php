<?php

namespace App\solid\OCP\Demo3\situation;

class RiskEvaluator {

    public function evaluate($type, $patientData)
    {
        if ($type === 'cardio') {
            return $patientData['cholesterol'] > 200;
        }

        if ($type === 'diabetes') {
            return $patientData['glucose'] > 120;
        }

        return false;
    }
}