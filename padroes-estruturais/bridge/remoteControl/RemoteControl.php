<?php

require_once __DIR__ . '/../device/DeviceImplementation.php';

class RemoteControl
{
  private DeviceImplementation $device;

  public function __construct(DeviceImplementation $device)
  {
    $this->device = $device;
  }

  public function togglePower(): void
  {
    $this->device->setPower(!$this->device->getPower());
  }
}

