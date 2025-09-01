<?php

interface CustomerInterface
{
  public function getName(): string;
  public function setName(string $name): void;
}