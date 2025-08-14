<?php

require_once __DIR__ . '/../interfaces/meal-builder-protocol.php';
require_once __DIR__ . '/mealBox.php';
require_once __DIR__ . '/meals.php';

/**
 * Essa é a classe que implementa o padrão builder, ela é 
 * responsavel por cria os objetos complexos e abstrair da 
 * classe cliente essa complexidade.
 */
class MainDishBuilder implements MealBuilderProtocol {
  private MealBox $mealBox;

  public function __construct()
  {
    $this->mealBox = new MealBox();
  }

  public function makeMeal(): MainDishBuilder
  {
    $rice = new Rice(15);
    $beans = new Beans(10);
    $meat = new Meat(20);
    $this->mealBox->add($rice, $beans, $meat);
    return $this;
  }

  public function makeBeverage(): MainDishBuilder 
  {
    $beverage = new Beverage(8);
    $this->mealBox->add($beverage);
    return $this;
  }

  public function makeDessert(): MainDishBuilder
  {
    $dessert = new Dessert(12);
    $this->mealBox->add($dessert);
    return $this;
  }

  public function getMeal(): MealBox
  {
    return $this->mealBox;
  }
}