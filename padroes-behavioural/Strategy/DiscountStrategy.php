<?php

namespace Strategy;

class DiscountStrategy
{
  protected float $discount = 0;

  public function getDiscount(ECommerceShoppingCart $cart): float
  {
    return $cart->getTotal();
  }
}
