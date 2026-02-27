<?php
namespace Strategy;

require_once 'autoload.php';

$shoppingCart = new ECommerceShoppingCart();
$product = new ECommerceProduct();

$product->setName('Produto 1');
$product->setPrice(50);
$shoppingCart->addProduct($product);

$product->setName('Produto 2');
$product->setPrice(50);
$shoppingCart->addProduct($product);

$product->setName('Produto 3');
$product->setPrice(50);
$shoppingCart->addProduct($product);

$product->setName('Produto 4');
$product->setPrice(50);
$shoppingCart->addProduct($product);

var_export($shoppingCart->getTotal());
echo PHP_EOL;
var_export($shoppingCart->getTotalWithDiscount());
echo PHP_EOL;