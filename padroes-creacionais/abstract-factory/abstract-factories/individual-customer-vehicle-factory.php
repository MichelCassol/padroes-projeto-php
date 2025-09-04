<?php

require_once __DIR__ . '/customer-vehicle-factory.php';
require_once __DIR__ . '/../customer/customer-protocol.php';
require_once __DIR__ . '/../vehicle/vehicle-protocol.php';
require_once __DIR__ . '/../vehicle/individual-car.php';
require_once __DIR__ . '/../customer/individual-customer.php';

/**
 * abstract Factory de Individual
 */
class IndividualCustomerVehicleFactory implements CustomerVehicleFactory
{
  public function createCustomer(string $customerName): CustomerProtocol
  {
    return new IndividualCustomer($customerName);
  }
  
  public function createVehicle(string $vehicleName, string $customerName): VehicleProtocol
  {
    $customer = $this->createCustomer($customerName);
    return new IndividualCar($vehicleName, $customer); // minuto 20:12
  }
}