<?php

namespace App\solid\OCP\Demo2\situation;

use App\solid\OCP\Demo2\situation\interfaces\DiscountType;

class DiscountCalculator {

    public function calculate(DiscountType $type, $price)
    {

        return $type->calculate($price);
//        if ($type === 'vip') {
//            return $price * 0.8;
//        }
//
//        if ($type === 'season') {
//            return $price * 0.9;
//        }
//
//        if ($type === 'coupon') {
//            return $price - 50;
//        }
//
//        return $price;
    }
}