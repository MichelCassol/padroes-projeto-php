<?php

require_once __DIR__ . '/customer-vehicle-factory.php';
require_once __DIR__ . '/../customer/customer-protocol.php';
require_once __DIR__ . '/../vehicle/vehicle-protocol.php';
require_once __DIR__ . '/../vehicle/entreprise-car.php';
require_once __DIR__ . '/../customer/entreprise-customer.php';

class EntrepriseCustomerVehicleFactory implements CustomerVehicleFactory
{
  public function createCustomer(string $customerName): CustomerProtocol
  {
    return new EntrepriseCustomer($customerName);
  }
  public function createVehicle(string $vehicleName, string $customerName): VehicleProtocol
  {
    $customer = $this->createCustomer($customerName);
    return new EntrepriseCar($vehicleName, $customer); // minuto 20:12
  }
}