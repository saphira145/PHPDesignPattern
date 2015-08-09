<?php

function __autoload($class) {
	include $class.'.php';
}

$factory = new ShapeFactory();
$circle = $factory->create("circle", 4);
var_dump($circle);