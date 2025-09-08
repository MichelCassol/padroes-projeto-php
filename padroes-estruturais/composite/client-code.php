<?php

require_once __DIR__ . '/leafs/product-leaf.php';
require_once __DIR__ . '/composites/product-composite.php';
require_once __DIR__ . '/composites/validation-composite.php';
require_once __DIR__ . '/leafs/validation-leaf.php';

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

// var_export($box);
// echo PHP_EOL . '---' . PHP_EOL;
// var_export($box->getPrice());

echo PHP_EOL . '---' . PHP_EOL;
echo 'Utilizando o padrão Composite para validação' . PHP_EOL;

$validationComposite = new ValidationComposite();
$validationComposite->setValidation(new ValidateString());
$validationComposite->setValidation(new ValidationEmail());
$validationComposite->setValidation(new ValidateNumber());
var_export($validationComposite->validate('g7GvV@example.c'));
