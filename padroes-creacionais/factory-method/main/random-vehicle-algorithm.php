<?php

require_once __DIR__ . '/../vehicle/vehicle-interface.php';
require_once __DIR__ . '/../factories/car-factory.php';
require_once __DIR__ . '/../factories/bicycle-factory.php';

function randomCarAlgorithm(): Vehicle
{
  $carFactory = new CarFactory();
  $bicycleFactory = new BicycleFactory();
  $car1 = $carFactory->getVehicle('Fusca'); 
  $car2 = $carFactory->getVehicle('Celta Preto'); 
  $bicycle = $bicycleFactory->getVehicle('Bicycle'); 
  $cars = [$car1, $car2, $bicycle];
  return $cars[array_rand($cars)];
}