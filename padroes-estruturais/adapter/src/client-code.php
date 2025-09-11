<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Root\App\validation\EmailValidationAdapter;
use Root\App\validation\EmailValidationInterface;

function validaEmail(EmailValidationInterface $emailValidator, string $email) : void {
  if ($emailValidator->isValid($email)) {
    echo 'E-mail válido';
  } else {
    echo 'E-mail inválido';
  }
}

validaEmail(new EmailValidationAdapter(), 'michel@me.com');
