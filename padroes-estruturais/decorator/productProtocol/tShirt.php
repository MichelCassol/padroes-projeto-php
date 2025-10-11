<?php

require_once __DIR__ . '/ProductProtocol.php';

class tShirt implements ProductProtocol
{
  public function getName(): string
  {
    return 'Camiseta ';
  }

  public function getPrice(): float
  {
    return 49.9;
  }
}
