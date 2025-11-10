<?php

class LocationData implements TypesDataInterface 
{
  private $street;
  private $city;

  public function __construct(string $street, string $city)
  {
    $this->street = $street;
    $this->city = $city;
  }

  public function getStreet(): string
  {
    return $this->street;
  }

  public function getCity(): string
  {
    return $this->city;
  }

  public function setStreet(string $street): void
  {
    $this->street = $street;
  }

  public function setCity(string $city): void
  {
    $this->city = $city;
  }
}
