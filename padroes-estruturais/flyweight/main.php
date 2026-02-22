<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Delivery\Impl\DeliveryContext;
use App\Factory\DeliveryFactory;

$factory = new DeliveryFactory();
$deliveryContext = new DeliveryContext();

$deliveryContext->deliveryContext(
  $factory,
  'Michel',
  '123',
  'Rua A',
  'Cidade X'
);
