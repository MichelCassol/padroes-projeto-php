<?php

require_once __DIR__ . '/customer-protocol.php';

class IndividualCustomer implements CustomerProtocol
{
  private string $name;
  public function __construct(string $name)
  {
    $this->name = $name . ' (INDIVIDUAL)';
  }

  public function getName(): string
  {
    return $this->name;
  }
}