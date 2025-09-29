<?php

class ProductCustomizationDecorator extends ProductDecorator
{
  public function getPrice(): float
  {
    return $this->product->getPrice() + 50;
  }

  public function getName(): string
  {
    return $this->product->getName() . ' (Personalizada)';
  }
}
