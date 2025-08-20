<?php

require_once __DIR__ ."/../interfaces/prototypeInterface.php";

class Prototype1 implements PrototypeInterface 
{
  private $name;

  private $age;

  private $address;

  public function __construct($name, $age, $address)
  {
    $this->name = $name;
    $this->age = $age;
    $this->address = $address;
  }

  public function setAddress($address)
  {
    $this->address = $address;
  }

  public function getAddress(): Address
  {
    return $this->address;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function setAge($age)
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

class Address
{
  private $street;
  private $number;

  public function __construct($street, $number)
  {
    $this->street = $street;
    $this->number = $number;
  }

  public function getStreet()
  {
    return $this->street;
  }

  public function getNumber()
  {
    return $this->number;
  }

  public function setStreet($street)
  {
    $this->street = $street;
  }

  public function setNumber($number)
  {
    $this->number = $number;
  }
}