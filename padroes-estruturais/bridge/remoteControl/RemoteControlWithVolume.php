<?php

require_once __DIR__ . '/RemoteControl.php';

class RemoteControlWithVolume extends RemoteControl
{
  public function volumeUp(): void
  {
    $oldVolume = $this->device->getVolume();
    $this->device->setVolume($this->device->getVolume() + 5);
    var_export($this->device->getName() . " tinha o volume $oldVolume agora tem " . $this->device->getVolume());
    echo PHP_EOL;
  }

  public function volumeDown(): void
  {
    $oldVolume = $this->device->getVolume();
    $this->device->setVolume($this->device->getVolume() - 5);
    var_export($this->device->getName() . " tinha o volume $oldVolume agora tem " . $this->device->getVolume());
    echo PHP_EOL;
  }
}

