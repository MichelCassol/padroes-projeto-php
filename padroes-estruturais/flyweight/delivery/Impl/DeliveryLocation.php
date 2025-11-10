<?php

class DeliveryLocation implements DeliveryInterface
{
  private TypesDataInterface $intrinsicState;

  public function __construct(TypesDataInterface $deliveryLocation)
  {
    $this->intrinsicState = $deliveryLocation;
  }

  public function delivery(string $name, string $number): void
  {
    echo "Entrega para $name" . PHP_EOL;
    echo "Em {$this->intrinsicState->getStreet()}, {$this->intrinsicState->getCity()}" . PHP_EOL;
    echo "Número: $number" . PHP_EOL;
  }
}

