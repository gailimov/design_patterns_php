<?php

require_once 'Pizza.php';
require_once 'PepperoniPizza.php';
require_once 'SimplePizzaFactory.php';
require_once 'PizzaStore.php';

(new PizzaStore(new SimplePizzaFactory()))->orderPizza('pepperoni');