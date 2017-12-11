<?php

class Customer
{
    const TABLE = 'customer';
    public $name;
    public $addressline1;
    public $addressline2;
    public $city;
    public $state;
    public $zip;


   public function __construct($name,$addressline1,$addressline2,$city,$state,$zip)
   {
        $this->name = $name;
        $this->addressline1 = $addressline1;
        $this->addressline2 = $addressline2;
        $this->city= $city;
        $this->state = $state;
        $this->zip = $zip;
    }

    public function getCustomerName()
    {
        return $this->name;
    }

    public function getCustomerState()
    {
        return $this->state;
    }
}


