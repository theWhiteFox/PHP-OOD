<?php

/**
 * Created by PhpStorm.
 * User: stephen.oconnor
 * Date: 11/11/2016
 * Time: 11:14
 */

namespace PHPmaster;

class Parcel
{

    protected $weight;
    protected $destinationAddress;
    public $destinationCountry;

    public function setWeight($weight) {
        echo "weight set to: " . $weight . "\n";
        $this->weight = $weight;
        return $this;
    }

    public function setCountry($country) {
        echo "destination country is: " . $country . "\n";
        $this->destinationCountry = $country;
        return $this;
    }
}

$myparcel = new Parcel();
$myparcel->setWeight(5)->setCountry('Peru');