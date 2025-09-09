<?php

namespace Root\App\Validation;

interface EmailValidationInterface
{
  public function isValid(string $email): bool;
}
