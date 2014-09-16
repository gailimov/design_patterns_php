<?php

require_once 'PizzaStore.php';
require_once 'NyPizzaStore.php';
require_once 'ChicagoPizzaStore.php';
require_once 'Pizza.php';
require_once 'NyStyleCheesePizza.php';
require_once 'ChicagoStyleCheesePizza.php';

$nyStore = new NyPizzaStore();
$pizza = $nyStore->order('cheese');
echo 'Ordered a ' . $pizza->getName() . PHP_EOL;

echo PHP_EOL;

$chicagoStore = new ChicagoPizzaStore();
$pizza = $chicagoStore->order('cheese');
echo 'Ordered a ' . $pizza->getName() . PHP_EOL;