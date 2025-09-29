<?php

require_once __DIR__ . '/ProductProtocol.php';

class ProductDecorator implements ProductProtocol
{
  protected $product;

  public function __construct(ProductProtocol $product)
  {
    $this->product = $product;
  }

  public function getPrice(): float
  {
    return $this->product->getPrice();
  }

  public function getName(): string
  {
    return $this->product->getName();
  }
}
