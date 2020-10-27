<?php


require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';
require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';

$bicycle = new Bicycle('blue', 1);
echo $bicycle->forward();
var_dump($bicycle);
echo '<hr/>';

$car = new Car('green', 4, 'electric');
echo $car->forward();
var_dump($car);
echo '<hr/>';

var_dump(Car::ALLOWED_ENERGIES);
echo'<hr/>';

$truck = new truck ('yellow',10,'diesel',100);
echo $truck->forward();
echo '<br> capacité du camion' . $truck->getCapacity() .'tonne' .'<br>';
echo '<br> chargement du camion' . $truck->getLoading() . 'tonne' .'<br>';
echo $truck->loading();
echo '<br> chargement : ' . $truck->getLoading() . 'tonne' . '<br>';
echo $truck->loading();
var_dump($truck);
