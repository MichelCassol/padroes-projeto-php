<?php

require_once __DIR__ . '/factories/entreprise-customer-vehicle-factory.php';
require_once __DIR__ . '/factories/individual-customer-vehicle-factory.php';

$entrepriseFactory = new EntrepriseCustomerVehicleFactory();
$individualFactory = new IndividualCustomerVehicleFactory();

$car1 = $entrepriseFactory->createVehicle('Fusca', 'João');
$car2 = $individualFactory->createVehicle('Gol', 'Maria');

$car1->pickUP();
$car2->pickUP();