<?php

class UserAddress implements SystemUserAddressInterface
{
  private string $street;
  private int $number;

  public function __construct(string $street, int $number)
  {
    sleep(2);
    $this->street = $street;
    $this->number = $number;
  }
  
  public function getStreet(): string
  {
    return $this->street;
  }
  public function getNumber(): int
  {
    return $this->number;
  }
}
