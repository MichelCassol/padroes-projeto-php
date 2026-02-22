<?php

namespace App\Types\Impl;

use App\Delivery\Impl\DeliveryLocation;
use App\Types\TypesDictionaryInterface;

class LocationDictionary implements TypesDictionaryInterface
{
  private array $locationData = [];

  public function getLocations(): array
  {
    return $this->locationData;
  }

  public function setLocation(string $key, DeliveryLocation $location) : self {
    $this->locationData[$key] = $location;
    return $this;
  }
}
