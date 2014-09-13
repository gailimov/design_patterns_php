<?php

require_once 'QuackBehavior.php';
require_once 'FlyBehavior.php';
require_once 'Quack.php';
require_once 'Squeak.php';
require_once 'MuteQuack.php';
require_once 'FlyWithWings.php';
require_once 'FlyNoWay.php';
require_once 'Duck.php';
require_once 'MallardDuck.php';
require_once 'RedheadDuck.php';
require_once 'RubberDuck.php';
require_once 'DecoyDuck.php';

echo 'Mallard duck:' . PHP_EOL;
$mallard = new MallardDuck();
echo $mallard->performQuack() . PHP_EOL;
echo $mallard->swim() . PHP_EOL;
echo $mallard->display() . PHP_EOL;
echo $mallard->performFly() . PHP_EOL;

echo '=========================' . PHP_EOL;

echo 'Redhead duck:' . PHP_EOL;
$redhead = new RedheadDuck();
echo $redhead->performQuack() . PHP_EOL;
echo $redhead->swim() . PHP_EOL;
echo $redhead->display() . PHP_EOL;
echo $redhead->performFly() . PHP_EOL;

echo '=========================' . PHP_EOL;

echo 'Rubber duck:' . PHP_EOL;
$rubber = new RubberDuck();
echo $rubber->performQuack() . PHP_EOL;
echo $rubber->swim() . PHP_EOL;
echo $rubber->display() . PHP_EOL;
echo $rubber->performFly() . PHP_EOL;

echo '=========================' . PHP_EOL;

echo 'Decoy duck:' . PHP_EOL;
$decoy = new DecoyDuck();
echo $decoy->performQuack() . PHP_EOL;
echo $decoy->swim() . PHP_EOL;
echo $decoy->display() . PHP_EOL;
echo $decoy->performFly() . PHP_EOL;