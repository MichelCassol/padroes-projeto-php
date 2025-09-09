<?php

namespace Root\App\Validation;

use Egulias\EmailValidator\EmailValidator;
use Egulias\EmailValidator\Validation\RFCValidation;

class EmailValidationAdapter implements EmailValidationInterface
{
  public function isValid(string $email): bool
  {
    $validator = new EmailValidator();
    return $validator->isValid($email, new RFCValidation());
  }
}
