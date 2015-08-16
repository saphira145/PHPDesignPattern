
<?php

function __autoload($class_name) {

	include $class_name . '.php';
}

$cus1 = new Customer('binh');
$cus2 = new Customer('nam');
$product = new Product('laptop', 123);
$product->attachObserver($cus1);
$product->attachObserver($cus2);
$product->setPrice(125);
// $product->setPrice(124);

