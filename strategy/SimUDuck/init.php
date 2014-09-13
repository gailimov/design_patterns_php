<?php

require_once 'Duck.php';
require_once 'MallardDuck.php';
require_once 'RedheadDuck.php';
require_once 'RubberDuck.php';
require_once 'DecoyDuck.php';

echo 'Mallard duck:' . PHP_EOL;
$mallard = new MallardDuck();
echo $mallard->quack() . PHP_EOL;
echo $mallard->swim() . PHP_EOL;
echo $mallard->display() . PHP_EOL;
echo $mallard->fly() . PHP_EOL;

echo '=========================' . PHP_EOL;

echo 'Redhead duck:' . PHP_EOL;
$redhead = new RedheadDuck();
echo $redhead->quack() . PHP_EOL;
echo $redhead->swim() . PHP_EOL;
echo $redhead->display() . PHP_EOL;
echo $redhead->fly() . PHP_EOL;

echo '=========================' . PHP_EOL;

echo 'Rubber duck:' . PHP_EOL;
$rubber = new RubberDuck();
echo $rubber->quack() . PHP_EOL;
echo $rubber->swim() . PHP_EOL;
echo $rubber->display() . PHP_EOL;
echo $rubber->fly() . PHP_EOL;

echo '=========================' . PHP_EOL;

echo 'Decoy duck:' . PHP_EOL;
$decoy = new DecoyDuck();
echo $decoy->quack() . PHP_EOL;
echo $decoy->swim() . PHP_EOL;
echo $decoy->display() . PHP_EOL;
echo $decoy->fly() . PHP_EOL;