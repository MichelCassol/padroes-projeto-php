<?php

abstract class ValidationComponent
{
  abstract public function validate($value): bool;
}
