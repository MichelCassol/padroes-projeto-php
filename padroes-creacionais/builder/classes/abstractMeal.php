<?php

require_once __DIR__ . '/../interfaces/meal-composite-protocol.php';

abstract class AbstractMeal implements Meal_composite_protocol
{
  private float $price;

  public function __construct(float $price)
  {
    $this->price = $price; 
  }

  public function getPrice(): float
  {
    return $this->price;
  }
}