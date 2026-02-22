<?php

namespace App\Delivery;

interface DeliveryInterface 
{
  public function delivery(string $name, string $number): void;
}
