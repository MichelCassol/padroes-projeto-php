<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Root\App\Validation\EmailValidationAdapter;
use Root\App\Validation\EmailValidationInterface;


function validaEmail(EmailValidationInterface $emailValidator, string $email) : void {
  if ($emailValidator->isValid($email)) {
    echo 'E-mail válido';
  } else {
    echo 'E-mail inválido';
  }
}

validaEmail(new EmailValidationAdapter(), 'michel@me.com');
