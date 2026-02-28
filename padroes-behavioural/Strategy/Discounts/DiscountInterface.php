<?php

namespace Strategy\Discounts;

use Strategy\ECommerceShopping\ECommerceShoppingCart;

interface DiscountInterface
{
  public function getDiscount(ECommerceShoppingCart $cart): float;
}
