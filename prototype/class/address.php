<?php

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