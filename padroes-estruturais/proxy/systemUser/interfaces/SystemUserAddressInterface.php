<?php

interface SystemUserAddressInterface
{
  public function __construct(string $street, int $number);
  public function getStreet();
  public function getNumber();
}
