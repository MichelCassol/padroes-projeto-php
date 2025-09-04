<?php

require_once __DIR__ ."/../interfaces/prototypeInterface.php";
require_once __DIR__ ."/address.php";

class PrototypeShallowCopy implements PrototypeInterface 
{
  private string $name;

  private int $age;

  private Address $address;

  public function __construct(string $name, int $age, Address $address)
  {
    $this->name = $name;
    $this->age = $age;
    $this->address = $address;
  }

  public function setAddress(Address $address): void
  {
    $this->address = $address;
  }

  public function getAddress(): Address
  {
    return $this->address;
  }

  public function setName(string $name): void
  {
    $this->name = $name;
  }

  public function setAge(int $age): void
  {
    $this->age = $age;
  }

  /**
   * @return self
   */
  public function __clone()
  {
    return $this;
  }
}
