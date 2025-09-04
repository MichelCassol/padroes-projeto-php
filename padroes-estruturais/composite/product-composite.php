<?php

abstract class ProductComposite
{
  abstract public function getPrice(): float;

  public function addProduct(ProductComposite $product): void {}

  public function removeProduct(ProductComposite $product): void {}
}

class ProductLeaf extends ProductComposite
{
  private string $name;
  private float $price;

    public function __construct(string $name, float $price)
    {
      parent::__construct();
      $this->name = $name;
      $this->price = $price;
    }

  public function getPrice(): float
  {
    return $this->price;
  }
}

class ProductComposed extends ProductComposite 
{
  private array $products = [];

  public function addProduct(ProductComposite $product): void
  {
    $this->products[] = $product;
  }

  public function removeProduct(ProductComposite $product): void
  {
    $index = array_search($product, $this->products);
    if ($index !== false) {
      unset($this->products[$index]);
    }
  }
}
