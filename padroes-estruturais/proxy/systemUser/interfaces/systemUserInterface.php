<?php

require_once __DIR__ . '/systemUserAddressInterface.php';

interface SystemUserInterface
{
  public function getAddresses(): SystemUserAddressInterface;
}
