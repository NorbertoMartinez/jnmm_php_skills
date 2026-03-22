<?php

namespace App\solid\OCP\Demo2\situation\discountTypes;

use App\solid\OCP\Demo2\situation\interfaces\DiscountType;

class VipDiscount implements DiscountType
{

    public function calculate($price)
    {
        return $price * 0.8;
    }
}