<?php

namespace Root\App\validation;

use Egulias\EmailValidator\EmailValidator;
use Egulias\EmailValidator\Validation\RFCValidation;
use Root\App\validation\EmailValidationInterface;

class EmailValidationAdapter implements EmailValidationInterface
{
  public function isValid(string $email): bool
  {
    $validator = new EmailValidator();
    return $validator->isValid($email, new RFCValidation());
  }
}
