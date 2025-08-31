<?php

abstract class VehicleFactory
{
  abstract public function getVehicle(string $vehicleName): Vehicle;

  public function pickUp(string $customerName, string $vehicleName): Vehicle
  {
    $car = $this->getVehicle($vehicleName);
    $car->pickUP($customerName);
    return $car;
  }
}