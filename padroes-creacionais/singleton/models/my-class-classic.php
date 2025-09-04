<?php

require_once __DIR__ . '/../interfaces/my-interface-classic.php';

class Users implements UserInterface
{
  private string $name;
  private int $age;
  public function getName(): string
  {
    return $this->name;
  }
  public function getAge(): int
  {
    return $this->age;
  }
  public function setName(string $name): void
  {
    $this->name = $name;
  }
  public function setAge(int $age): void
  {
    $this->age = $age;
  }
}