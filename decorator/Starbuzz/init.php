<?php

require_once 'Beverage.php';
require_once 'DarkRoast.php';
require_once 'Espresso.php';
require_once 'HouseBlend.php';

function getOrder(Beverage $beverage)
{
    return $beverage->getDescription() . ' $' . $beverage->cost() . PHP_EOL;
}

$darkRoast = (new DarkRoast())
    ->setMocha()
    ->setWhip();
echo getOrder($darkRoast);

$espresso = new Espresso();
echo getOrder($espresso);

$houseBlend = (new HouseBlend())->setWhip();
echo getOrder($houseBlend);