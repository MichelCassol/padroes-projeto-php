<?php

require_once __DIR__ . '/../classes/main-dish-builder.php';

interface MealBuilderProtocol {
    public function makeMeal(): MainDishBuilder;
    public function makeBeverage(): MainDishBuilder;
    public function makeDessert(): MainDishBuilder;
}