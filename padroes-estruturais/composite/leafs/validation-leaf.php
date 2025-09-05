<?php

require_once __DIR__ . '/../components/validation-component.php';

class ValidationEmail extends ValidationComponent
{
  public function validate($value): bool
  {
    return filter_var($value, FILTER_VALIDATE_EMAIL);
  }
}

class ValidateString extends ValidationComponent
{
  public function validate($value): bool
  {
    return is_string($value);
  }
}

class ValidateNumber extends ValidationComponent
{
  public function validate($value): bool
  {
    return is_numeric($value);
  }
}
