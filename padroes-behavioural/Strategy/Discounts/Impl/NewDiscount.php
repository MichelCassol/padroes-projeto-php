<?php

namespace Strategy\Discounts\Impl;

use Strategy\ECommerceShopping\ECommerceShoppingCart;

class NewDiscount extends DiscountStrategy
{
  public function getDiscount(ECommerceShoppingCart $cart): float {

    $total = $cart->getTotal();

    if ($total >= 150) {
      $this->discount = 5;
    }

    return $total - $total * ($this->discount / 100);
  }
}
