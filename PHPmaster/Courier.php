<?php

/**
 * Created by PhpStorm.
 * User: stephen.oconnor
 * Date: 10/11/2016
 * Time: 14:14
 */
class Courier
{
    public $name;
    public $homeCountry;

    public function __construct($name)
    {
        $this->name = $name;
        return true;
    }

    public function ship($parcel)
    {
        // sends the parcel to it's destination
        return true;
    }
}