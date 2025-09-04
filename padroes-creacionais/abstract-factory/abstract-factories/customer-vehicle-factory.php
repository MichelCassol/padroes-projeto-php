<?php

require_once __DIR__ . '/../customer/customer-protocol.php';
require_once __DIR__ . '/../vehicle/vehicle-protocol.php';

interface CustomerVehicleFactory
{
  public function createCustomer(string $customerName): CustomerProtocol;
  public function createVehicle(string $vehicleName, string $customerName): VehicleProtocol;
}