<?php
include "Models/Bike.php";
include "Models/Car.php";
include "Models/Plane.php";

$minutos = 10;

$vehicle = new Bike();
echo $vehicle->getName() . ': </br>';
echo 'velocidad: ' . $vehicle->speed() . '</br>';
echo 'maximo de pasajeros: ' . $vehicle->maxPassengers() . '</br>';
echo 'distancia: ' . $vehicle->travelDistance($minutos) . '</br> </br>';

$vehicle2 = new Car();
echo $vehicle2->getName() . ': </br>';
echo 'velocidad: ' . $vehicle2->speed() . '</br>';
echo 'maximo de pasajeros: ' . $vehicle2->maxPassengers() . '</br>';
echo 'distancia: ' . $vehicle2->travelDistance($minutos) . '</br> </br>';


$vehicle3 = new Plane();
echo $vehicle3->getName() . ': </br>';
echo 'velocidad: ' . $vehicle3->speed() . '</br>';
echo 'maximo de pasajeros: ' . $vehicle3->maxPassengers() . '</br>';
echo 'distancia: ' . $vehicle3->travelDistance($minutos) . '</br> </br>';



?>