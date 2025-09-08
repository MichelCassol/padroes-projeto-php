<?php

require_once __DIR__ . '/../components/validation-component.php';

class ValidationComposite extends ValidationComponent
{
  private array $validationComponent;

  public function validate($value): bool
  {
    foreach ($this->validationComponent as $validation) {
      if (!$validation->validate($value)) {
        return false;
      }
    }
    return true;
  }

  public function setValidation(ValidationComponent $validationComponent): void
  {
    $this->validationComponent[] = $validationComponent;
  }
}
