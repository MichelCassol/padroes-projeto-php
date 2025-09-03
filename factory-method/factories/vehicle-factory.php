<?php

abstract class VehicleFactory
{
  /**
   * Factory method
   * @param string $vehicleName
   * @return Vehicle
   */
  abstract public function getVehicle(string $vehicleName): Vehicle;

  public function pickUp(string $customerName, string $vehicleName): Vehicle
  {
    $vehicle = $this->getVehicle($vehicleName);
    $vehicle->pickUP($customerName);
    return $vehicle;
  }
}