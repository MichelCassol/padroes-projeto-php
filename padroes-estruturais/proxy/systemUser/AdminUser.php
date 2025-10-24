<?php

require_once __DIR__ . '/interfaces/SystemUserInterface.php';
require_once __DIR__ . '/interfaces/SystemUserAddressInterface.php';
require_once __DIR__ . '/UserAddress.php';

class AdminUser implements SystemUserInterface
{
  private string $firstName;
  private string $userName;

  public function __construct(string $firstName, string $userName)
  {
    $this->firstName = $firstName;
    $this->userName = $userName;
  }
  
  public function getAddresses(): array
  {
    $enderecos[] = new UserAddress('Rua 1', 1);
    $enderecos[] = new UserAddress('Rua 2', 2);
    return $enderecos;
  }
}
