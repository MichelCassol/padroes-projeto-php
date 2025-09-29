<?php

require_once __DIR__ . '/productProtocol/ProductDecorator.php';
require_once __DIR__ . '/productProtocol/ProductStampDecorator.php';
require_once __DIR__ . '/productProtocol/tShirt.php';

$tShirt = new tShirt();
$tShirtWithStamp = new ProductStampDecorator($tShirt);
$tShirtWithStampFrontAndBack = new ProductStampDecorator($tShirtWithStamp);

var_export($tShirt->getPrice(). ' ' . $tShirt->getName());
echo PHP_EOL;
var_export($tShirtWithStamp->getPrice());
echo PHP_EOL;
var_export($tShirtWithStampFrontAndBack->getPrice());
