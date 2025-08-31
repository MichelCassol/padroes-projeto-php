<?php

require_once __DIR__ . '/vehicle-factory.php';
require_once __DIR__ . '/../vehicle/car.php';
require_once __DIR__ . '/../vehicle/vehicle-interface.php';

class CarFactory extends VehicleFactory
{
  public function getVehicle(string $vehicleName): Vehicle
  {
    return new Car($vehicleName);
  }
}