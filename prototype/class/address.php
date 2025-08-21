<?php

class Address
{
  private string $street;
  private int $number;

  public function __construct(string $street, int $number)
  {
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

  public function setStreet(string $street): void
  {
    $this->street = $street;
  }

  public function setNumber(int $number): void
  {
    $this->number = $number;
  }
}