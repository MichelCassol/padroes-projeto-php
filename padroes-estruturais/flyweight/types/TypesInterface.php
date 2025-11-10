<?php

interface TypesDataInterface
{
  public function getStreet(): string;
  public function getCity(): string;
  public function setStreet(string $street): void;
  public function setCity(string $city): void;
}

interface TypesDictionaryInterface
{
  public function getTypes(): array;
}


