<?php

namespace Discounts;

use ECommerceShopping\ECommerceShoppingCart;

interface DiscountInterface
{
  public function getDiscount(ECommerceShoppingCart $cart): float;
}
