<?php

require_once __DIR__ . '/main/random-vehicle-algorithm.php';

$customerNames = ['Ana','Joana','Helena','João','Fernando'];

for ($i=0; $i < 10; $i++) { 
  $vehicle = randomCarAlgorithm();
  $name = $customerNames[array_rand($customerNames)];
  $vehicle->pickUP($name);
  $vehicle->stop();
  echo '---'.PHP_EOL;
}