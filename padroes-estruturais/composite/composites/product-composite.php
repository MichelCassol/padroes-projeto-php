<?php

require_once __DIR__ . '/../components/product-component.php';

class ProductComposed extends ProductComponent
{
  private array $products = [];

  public function addProduct(ProductComponent ...$product): void
  {
    $this->products = array_merge($this->products, $product);
  }

  public function removeProduct(ProductComponent $product): void
  {
    $index = array_search($product, $this->products);
    if ($index !== false) {
      unset($this->products[$index]);
    }
  }

  public function getPrice(): float
  {
    return array_reduce($this->products, function (float $total, ProductComponent $product) {
      return $total + $product->getPrice();
    }, 0);
  }
}
