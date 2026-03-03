<?php

namespace ECommerceShopping;

use Discounts\Impl\DiscountStrategy;
use Products\ECommerceProductInterface;

class ECommerceShoppingCart
{
  private array $products;
  private DiscountStrategy $discountStrategy;

  public function __construct()
  {
    $this->discountStrategy = new DiscountStrategy;
  }

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
      function (?float $sum, ECommerceProductInterface $product): float {
        return $sum + $product->getPrice();
      }
    );
  }

  public function getTotalWithDiscount(): float
  {
    return $this->discountStrategy->getDiscount($this);
  }

  public function __set($name, $value)
  {
    $this->$name = $value;
  }

  public function __get($name)
  {
    return $this->$name;
  }
}
