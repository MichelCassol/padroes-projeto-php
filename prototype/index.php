<?php

require_once __DIR__ . "/class/prototype1.php";

$address = new Address("Av. Brasil", "123");
$prototype1 = new Prototype1("John", 30, $address);
$prototype2 = clone $prototype1;

$prototype1->getAddress()->setStreet("Av. Paulista");

$prototype2->setName("Jane");

var_export($prototype1);
echo PHP_EOL;
var_export($prototype2);
