<?php

interface DeviceImplementation
{
  public function getName(): string;
  public function setPower(bool $powerStatus): void;
  public function getPower(): bool;
  public function setVolume(int $volume): void;
  public function getVolume(): int;
}
