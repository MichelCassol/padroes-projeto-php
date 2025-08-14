<?php

require_once __DIR__ . '/classes/mealBox.php';
require_once __DIR__ . '/classes/meals.php';

$rice = new Rice(10);
$beans = new Beans(10);
$beverage = new Beverage(10);
$meat = new Meat(10);
$dessert = new Dessert(10);

$mealBox = new MealBox(); 
$mealBox->add($rice, $beans, $beverage, $meat, $dessert);

echo $mealBox->getPrice();