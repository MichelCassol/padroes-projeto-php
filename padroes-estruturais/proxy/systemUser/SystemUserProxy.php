<?php

require_once __DIR__ . '/interfaces/SystemUserInterface.php';
require_once __DIR__ . '/interfaces/SystemUserAddressInterface.php';
require_once __DIR__ . '/AdminUser.php';

class SystemUserProxy implements SystemUserInterface
{
  private ?SystemUserInterface $realUser = null;
  private ?array $realUserAddresses = null;

  private string $firstName;
  private string $userName;

  public function __construct(string $firstName, string $userName)
  {
    $this->firstName = $firstName;
    $this->userName = $userName;
  }

  private function createUser(): SystemUserInterface
  {
    if ($this->realUser === null) {
      $this->realUser = new AdminUser($this->firstName, $this->userName);
    }
    return $this->realUser;
  }
  
  public function getAddresses(): array
  {
    $this->realUser = $this->createUser();

    if ($this->realUserAddresses === null) {
      $this->realUserAddresses = $this->realUser->getAddresses();
    }

    return $this->realUserAddresses;
  }
}
