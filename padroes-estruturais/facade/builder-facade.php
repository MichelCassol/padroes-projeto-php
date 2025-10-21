<?php

require_once __DIR__ . '/../../padroes-creacionais/builder/index.php';

class BuilderFacade
{
  // Essa é uma fachada para o arquivo src/creational/builder/index.php
  private MainDishBuilder $mainDishBuilder;

  public function makeMeal(): void
  {
    $this->mainDishBuilder = new MainDishBuilder();
    $price = $this->mainDishBuilder
      ->makeMeal()
      ->makeBeverage()
      ->getMeal()
      ->getPrice();

    echo 'preco' . $price;
  }
}

