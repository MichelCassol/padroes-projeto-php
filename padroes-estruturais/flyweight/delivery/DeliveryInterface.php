<?php

interface DeliveryInterface 
{
  public function delivery(string $name, string $number): void;
}
