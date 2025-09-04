<?php

require_once __DIR__ . '/../interfaces/meal-composite-protocol.php';

class MealBox implements Meal_composite_protocol
{
  /**
   * @var Meal_composite_protocol[]
   */
  private array $meals;

  public function add(Meal_composite_protocol ...$meals)
  {
    foreach ($meals as $meal) {
      $this->meals[] = $meal;
    }
  }

  public function getPrice(): float
  {
    return array_reduce($this->meals, function (float $total, Meal_composite_protocol $meal) {
      return $total + $meal->getPrice();
    }, 0);
  }
}