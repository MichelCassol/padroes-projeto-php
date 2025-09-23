<?php

require_once __DIR__ . '/../device/DeviceImplementation.php';

class RemoteControl
{
  protected DeviceImplementation $device;

  public function __construct(DeviceImplementation $device)
  {
    $this->device = $device;
  }

  public function togglePower(): void
  {
    $this->device->setPower(!$this->device->getPower());
    var_export($this->device->getName() . " esta " . ($this->device->getPower() ? "ligado" : "desligado"));
    echo PHP_EOL;
  }
}

