<?php

require_once __DIR__ . '/ProductDecorator.php';

class ProductStampDecorator extends ProductDecorator
{
  public function getPrice(): float
  {
    return $this->product->getPrice() + 10;
  }

  public function getName(): string
  {
    return $this->product->getName() . ' (Estampada)';
  }
}
