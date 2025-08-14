<?php
require_once __DIR__ . '/classes/main-dish-builder.php';

$mainDishBuilder = new MainDishBuilder();
$price = $mainDishBuilder
  ->makeMeal()
  ->makeBeverage()
  ->getMeal()
  ->getPrice();

echo $price;