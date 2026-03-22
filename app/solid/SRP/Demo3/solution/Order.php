<?php

namespace App\solid\SRP\Demo3\solution;

class  Order
{
    protected $customer = null;

    protected $total = 0;

    /**
     * @param $customer
     * @return void
     */
    public function setCustomer($customer):void
    {
        $this->customer = $customer;
    }

    /**
     * @param $total
     * @return void
     */
    public function setTotal($total):void
    {
        $this->total = $total;
    }

    /**
     * @return mixed|null
     */
    public function getCustomer() //: Customer
    {
        return $this->customer;
    }

    /**
     * @return int|mixed
     */
    public function getTotal():float
    {
        return $this->total;
    }

}
