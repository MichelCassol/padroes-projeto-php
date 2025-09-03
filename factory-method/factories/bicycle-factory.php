<?php

require_once __DIR__ . '/vehicle-factory.php';
require_once __DIR__ . '/../vehicle/bicycle.php';
require_once __DIR__ . '/../vehicle/vehicle-interface.php';

class BicycleFactory extends VehicleFactory
{
  /**
   * Factory Method
   * @param string $vehicleName
   * @return Bicycle
   */
  public function getVehicle(string $vehicleName): Vehicle
  {
    return new Bicycle($vehicleName);
  }
}