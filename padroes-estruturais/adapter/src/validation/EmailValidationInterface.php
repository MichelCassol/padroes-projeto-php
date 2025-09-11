<?php

namespace Root\App\validation;

interface EmailValidationInterface
{
  public function isValid(string $email): bool;
}
