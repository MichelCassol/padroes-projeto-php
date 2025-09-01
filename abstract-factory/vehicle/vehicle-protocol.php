<?php

require_once __DIR__ . '/customer-protocol.php';

interface VehicleProtocol 
{
  public function __construct(string $custonName, CustomerProtocol $customer); 
  public function pickUP(): void;
}