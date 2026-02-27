<?php

namespace Strategy;

class ECommerceShoppingCart
{
  private array $products;
  private $discountStrategy = new DiscountStrategy;

  public function addProduct(ECommerceProductInterface $products) 
  {
    $this->products[] = $products;
  }

  public function getProducts(): array {
    return $this->products;
  }

  public function getTotal(): float
  {
    return array_reduce(
      $this->products, 
      function (float $sum, ECommerceProductInterface $product): float {
        return $sum + $product->getPrice();
      }
    );
  }

  public function getTotalWithDiscount(): float
  {
    return $this->discountStrategy->getDiscount($this);
  }
}
