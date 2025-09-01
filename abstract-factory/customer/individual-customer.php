<?php

require_once __DIR__ . '/customer-protocol.php';

class Individual_customer implements CustomerProtocol
{
  private string $name;
  public function __construct(string $name)
  {
    $this->name = $name;
  }

  public function getName(): string
  {
    return $this->name;
  }
}