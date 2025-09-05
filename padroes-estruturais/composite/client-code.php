<?php

require_once __DIR__ . '/leafs/product-leaf.php';
require_once __DIR__ . '/composites/product-composite.php';

$pen = new ProductLeaf('caneta', 0.5);
$smartphone = new ProductLeaf('Smartphone', 1000);
$notebook = new ProductLeaf('Notebook', 3000);
$box = new ProductComposed();
$box->addProduct($pen, $smartphone, $notebook);

$mouse = new ProductLeaf('Mouse', 50);
$tablet = new ProductLeaf('Tablet', 5000);
$newBox = new ProductComposed();
$newBox->addProduct($mouse, $tablet);
$box->addProduct($newBox);

var_export($box);
echo PHP_EOL . '---' . PHP_EOL;
var_export($box->getPrice());
