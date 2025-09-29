<?php

interface ProductProtocol
{
  public function getPrice(): float;
  public function getName(): string;
}
