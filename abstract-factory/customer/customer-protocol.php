<?php

interface CustomerProtocol
{
  public function __construct(string $name);
  public function getName(): string;
}