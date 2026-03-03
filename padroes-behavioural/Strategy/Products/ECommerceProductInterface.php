<?php

namespace Products;

interface ECommerceProductInterface 
{
  public function getPrice(): float;

  public function getName(): string ;

  public function setPrice(float $price): void;

  public function setName(string $name): void;
}
