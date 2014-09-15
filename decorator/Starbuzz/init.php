<?php

require_once 'Beverage.php';
require_once 'DarkRoast.php';

$darkRoast = new DarkRoast();
echo $darkRoast->getDescription() . ' $' . $darkRoast->cost() . PHP_EOL;