<?php

namespace Strategy\Discounts\Impl;

use Strategy\Discounts\DiscountInterface;
use Strategy\ECommerceShopping\ECommerceShoppingCart;

class DiscountStrategy implements DiscountInterface
{
  protected float $discount = 0;

  public function getDiscount(ECommerceShoppingCart $cart): float
  {
    return $cart->getTotal();
  }
}
