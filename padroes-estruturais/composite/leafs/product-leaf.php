<?php

require_once __DIR__ . '/../components/product-component.php';

class ProductLeaf extends ProductComponent
{
  private string $name;
  private float $price;

    public function __construct(string $name, float $price)
    {
      $this->name = $name;
      $this->price = $price;
    }

  public function getPrice(): float
  {
    return $this->price;
  }
}
