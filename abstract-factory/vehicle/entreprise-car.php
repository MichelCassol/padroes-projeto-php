<?php

require_once __DIR__ . '/vehicle-protocol.php';
require_once __DIR__ . '/../customer/customer-protocol.php';

class EntrepriseCar implements VehicleProtocol 
{
  private string $name;
  private CustomerProtocol $customer;
  public function __construct(string $name, CustomerProtocol $customer)
  {
    $this->name = $name;
    $this->customer = $customer;
  }
  
  public function pickUP(): void 
  {
    var_export("$this->name esta buscando " . $this->customer->getName() . " (ENTREPRISE)");
    echo PHP_EOL;
  }
}