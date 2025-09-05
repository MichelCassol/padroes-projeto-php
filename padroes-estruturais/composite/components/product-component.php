<?php

abstract class ProductComponent
{
  abstract public function getPrice(): float;

  public function addProduct(ProductComponent ...$product): void {}

  public function removeProduct(ProductComponent $product): void {}
}
