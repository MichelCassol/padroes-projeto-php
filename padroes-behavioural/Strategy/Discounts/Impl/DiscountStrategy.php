<?php

namespace Discounts\Impl;

use Discounts\DiscountInterface;
use ECommerceShopping\ECommerceShoppingCart;

class DiscountStrategy implements DiscountInterface
{
  protected float $discount = 0;

  public function getDiscount(ECommerceShoppingCart $cart): float
  {
    return $cart->getTotal();
  }
}
