<?php

function __autoload($class) {
    if (file_exists($class . ".php"))
        include $class . ".php";
    else
        include "Size/{$class}.php";
}

 function out($in) {
    echo $in . "</br>";
}

$mocha = new Mocha;
$mocha->setSize(new Small);
out($mocha->cost());

$mocha = new Chocolate($mocha);
out($mocha->cost());


$mocha = new MilkDecorator($mocha);
out($mocha->cost());