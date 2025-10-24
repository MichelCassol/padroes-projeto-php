<?php

require_once __DIR__ . '/SystemUserAddressInterface.php';

interface SystemUserInterface
{
  public function getAddresses(): array;
}
