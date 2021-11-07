<?php

require_once 'bicycle.php';
require_once 'car.php';
require_once 'truck.php';
require_once 'motorWay.php';
require_once 'pedestrianWay.php';
require_once 'residentialWay.php';
require_once 'highway.php';
require_once 'skateboard.php';
require_once 'lightableInterface.php';

$bicycle = new Bicycle('blue', 1);
echo $bicycle->forward() . '<br>';


$car = new Car('green', 4);
echo $car->forward() . '<br>';

$tesla = new Car('black', 2);
$ferrari = new Car ('red', 2);
$schoolBus = new Car ('yellow', 40);

$vehicle = new Vehicle ('pink', 4);


$truck = new Truck ('pink', 2, 'fuel', 0, 100);
echo $truck->brake()  . '<br>';
echo 'Truck is ' . $truck->getColor() . ' and have ' . $truck->getNbSeats() . ' seats';


$motorWay = new motorWay(4, 130);
$motorWay->addVehicle($car);

$skateboard = new Skateboard();

$residentialWay = new residentialWay (2, 50);
$residentialWay->addVehicle($skateboard);
$residentialWay->addVehicle($car);
$residentialWay->addVehicle($bicycle);


$pedestrianWay = new pedestrianWay(1, 10);
$pedestrianWay->addVehicle($bicycle);
$pedestrianWay->addVehicle($skateboard);




