<?php
/**
 * Created by PhpStorm.
 * User: stephen.oconnor
 * Date: 10/11/2016
 * Time: 15:50
 */

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'Courier.php';
require 'PigeonPost.php';
require 'Parcel.php';

$mono = new PHPmaster\Courier('Monospace Delivery', 'Ireland');

echo "Courier Name: " . $mono->name;
echo "<br />Home Country: " . $mono->homeCountry;
//$parcel = "Coat";
//$mono->ship($parcel);

$courier = new PHPmaster\PigeonPost('Local Avian Delivery Ltd', 'England');
echo "<br />";


if ($courier instanceof Courier) {
    echo $courier->name . " is a Courier\n";
}

if ($courier instanceof PigeonPost) {
    echo $courier->name . " is a PigeonPost\n";
}

if ($courier instanceof Parcel) {
    echo $courier->name . " is a Parcel\n";
}

$box1 = new \PHPmaster\Parcel();
$box1->destinationCountry = 'Denmark';

$box2 = new \PHPmaster\Parcel();
$box2->destinationCountry = 'Brazil';

echo 'Parcles need to ship to: '
    . $box1->destinationCountry . ' and '
    . $box2->destinationCountry;

if ($box1 == $box2) echo 'equivalent';

if ($box1 === $box2) echo 'exact same obj';

$courier = new \PHPmaster\PigeonPost('Avain Delivery Ltd', 'Spain');

$otherCourier = clone $courier;
$otherCourier->name = 'Pigeon Post';
echo '<br />';
echo $courier->name;

$courier = new \PHPmaster\Courier('Avian Carrier', 'France');
$courier->name = 'Avian Carrier';
$courier->homeCountry = 'France';
echo $courier->name;


//$spanishCouriers = PHPmaster\Courier::getCouriersBycountry('Spain');

//spl_autoload_register(function ($className)
//{
//   $className = ltrim($className, '\\');
//    $fileName = '';
//    $nameSpace = '';
//    if($lastNs)
//});