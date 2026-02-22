<?php

namespace App\Delivery\Impl;

use App\Factory\DeliveryFactory;
use App\Types\Impl\LocationData;

class DeliveryContext
{
  function deliveryContext(
    DeliveryFactory $factory,
    string $name,
    string $number,
    string $street,
    string $city
  ): void {
    $locationData = new LocationData($street, $city);
    $location = $factory->makeLocation($locationData);
    $location->delivery($name, $number);
  }
}
