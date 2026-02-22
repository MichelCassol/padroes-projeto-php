<?php

namespace App\Factory;

use App\Delivery\DeliveryInterface;
use App\Delivery\Impl\DeliveryLocation;
use App\Types\Impl\LocationDictionary;
use App\Types\TypesDataInterface;

class DeliveryFactory
{
  private ?LocationDictionary $locationDictionary = null;

  private function createKey(TypesDataInterface $intrinsicState): string
  {
    return trim($intrinsicState->getStreet() . '_' . $intrinsicState->getCity());
  }

  public function makeLocation(TypesDataInterface $intrinsicState): DeliveryInterface {
    $key = $this->createKey($intrinsicState);

    if ($this->locationDictionary === null) {
      $this->locationDictionary = new LocationDictionary();
    }

    if (array_key_exists($key, $this->locationDictionary->getLocations())) {
      return $this->locationDictionary->getLocations()[$key];
    }


    $this->locationDictionary->setLocation($key, new DeliveryLocation($intrinsicState));
    return $this->locationDictionary->getLocations()[$key];
  }

  public function getLocations(): LocationDictionary {
    return $this->locationDictionary;
  }
}
