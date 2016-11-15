<?php

/**
 * Created by PhpStorm.
 * User: stephen.oconnor
 * Date: 10/11/2016
 * Time: 14:14
 */

namespace PHPmaster;

class Courier
{
    protected $name;
    public $homeCountry;
    protected $data = array();

    public function __get($property)
    {
        return $this->data[$property];
    }

    public function __set($property, $value)
    {
        $this->data[$property] = $value;
        return true;
    }

//    function getName()
//    {
//        return $this->name;
//    }
//
//    function setName($value)
//    {
//        $this->name = $value;
//        return true;
//    }

//    public function __construct($name, $homeCountry)
//    {
//        $this->name = $name;
//        $this->homeCountry = $homeCountry;
//        return true;
//    }

//    public function ship(Parcel $parcel)
//    {
//        // sends the parcel to it's destination
//        return true;
//    }
//
//    public function calculateShipping($parcel)
//    {
//        // look up the rate for the destination, we'll invent one
//        $rate = 1.78;
//
//        // calc the cost
//        $cost = $rate * $parcel->weight;
//        return $cost;
//    }
//
//    private function getShippingRateForCountry($country)
//    {
//        // some excellent rate calculating code goes here
//        // for the example, we'll just think of a number
//        return 1.2;
//    }
//
//    function savePreferredSupplier(Courier $courier)
//    {
//        // add to list and save
//        return true;
//    }

//    public static function getCouriersByCountry($country)
//    {
//        // get a list of couriers with their home_country = $country
//
//        // create a Courier obj for each result
//
//        // return an array of the results
//        return $courierList;
//    }
}

