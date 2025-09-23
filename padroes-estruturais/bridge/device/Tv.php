<?php

require_once 'DeviceImplementation.php';

class Tv implements DeviceImplementation
{
  private int $volume = 10;
  private bool $powerStatus = false;
  private string $name = 'TV';

  public function getVolume(): int
  {
    return $this->volume;
  }

  public function setVolume(int $volume): void
  {
    $this->volume = $volume;
  }

  public function getPower(): bool
  {
    return $this->powerStatus;
  }

  public function setPower(bool $powerStatus): void
  {
    $this->powerStatus = $powerStatus;
  }

  public function getName(): string
  {
    return $this->name;
  }

  public function setName(string$name): void
  {
    $this->name = $name;
  }
}
