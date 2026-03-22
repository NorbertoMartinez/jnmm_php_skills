<?php

namespace App\solid\SRP\Demo1\solution;

class User
{
    /**
     * Domain / Bussiness logical responsability
     */
    protected $name = null;

    //...

    public function setName($name)
    {
        $this->name = $name;
    }
    // ...

    public function getName(){
        return $this->name;
    }
    // ..
}