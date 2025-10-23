<?php

class AdminUser implements SystemUserInterface
{
  public function getAddresses(): SystemUserAddressInterface
  {
    $enderecos[] = new UserAddress('Rua 1', 1);
    $enderecos[] = new UserAddress('Rua 2', 2);
    return $enderecos;
  }
}
