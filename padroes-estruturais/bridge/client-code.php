<?php

require_once __DIR__ . '/remoteControl/RemoteControl.php';
require_once __DIR__ . '/remoteControl/RemoteControlWithVolume.php';
require_once __DIR__ . '/device/Tv.php';
require_once __DIR__ . '/device/Radio.php';

function clienteCode(RemoteControl | RemoteControlWithVolume $abstraction) : void
{
  $abstraction->togglePower();

  if (! ($abstraction instanceof RemoteControlWithVolume)) {
    return;
  }

  $abstraction->volumeUp();
  $abstraction->volumeUp();
  $abstraction->volumeDown();
}

$tv = new Tv();
$radio = new Radio();

$radioRemote = new RemoteControl($radio);
clienteCode($radioRemote);

$tvRemote = new RemoteControlWithVolume($tv);
clienteCode($tvRemote);
