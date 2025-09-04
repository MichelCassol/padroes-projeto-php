<?php

require_once __DIR__ . "/class/prototype_shallowcopy.php";

$address = new Address("Av. Brasil", "123");
$prototype1 = new PrototypeShallowCopy("John", 25, $address);
$prototype2 = clone $prototype1;

$prototype1->getAddress()->setStreet("Av. Paulista");

echo "Shallow Copy";
echo PHP_EOL;
var_export($prototype1);
echo PHP_EOL;
var_export($prototype2);
echo PHP_EOL;
echo PHP_EOL;

require_once __DIR__ . "/class/prototype_deepcopy.php";

$address2 = new Address("Av. Rui Barbosa", "123");
$prototype3 = new PrototypeDeepCopy("Person2", 30, $address2);
$prototype4 = clone $prototype3;

$prototype3->getAddress()->setStreet("Av. 7 de Setembroooooo");

echo "Deep Copy";
echo PHP_EOL;
var_export($prototype3);
echo PHP_EOL;
var_export($prototype4);
echo PHP_EOL;
