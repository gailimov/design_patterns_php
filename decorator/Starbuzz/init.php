<?php

require_once 'Beverage.php';
require_once 'DarkRoast.php';
require_once 'Espresso.php';
require_once 'HouseBlend.php';
require_once 'CondimentDecorator.php';
require_once 'Mocha.php';
require_once 'Whip.php';

function getOrder(Beverage $beverage)
{
    return $beverage->getDescription() . ' $' . $beverage->cost() . PHP_EOL;
}

$darkRoast = new DarkRoast();
$darkRoast = new Mocha($darkRoast);
$darkRoast = new Mocha($darkRoast);
$darkRoast = new Whip($darkRoast);
echo getOrder($darkRoast);

$espresso = new Espresso();
echo getOrder($espresso);

$houseBlend = new HouseBlend();
$houseBlend = new Whip($houseBlend);
echo getOrder($houseBlend);