<?php

require_once __DIR__ . '/productProtocol/ProductDecorator.php';
require_once __DIR__ . '/productProtocol/ProductStampDecorator.php';
require_once __DIR__ . '/productProtocol/tShirt.php';
require_once __DIR__ . '/productProtocol/ProductCustomizationDecorator.php';

$tShirt = new tShirt();
$tShirtWithStamp = new ProductStampDecorator($tShirt);
$tShirtWithStampFrontAndBack = new ProductStampDecorator($tShirtWithStamp);
$cutomizedTShirt = new ProductCustomizationDecorator($tShirt);

var_export($tShirt->getPrice() . ' ' . $tShirt->getName());
echo PHP_EOL;
var_export($tShirtWithStamp->getPrice() . ' ' . $tShirtWithStamp->getName());
echo PHP_EOL;
var_export($tShirtWithStampFrontAndBack->getPrice (). ' ' . $tShirtWithStampFrontAndBack->getName());
echo PHP_EOL;
var_export($cutomizedTShirt->getPrice() . ' ' . $cutomizedTShirt->getName());
echo PHP_EOL;