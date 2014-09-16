<?php

require_once 'Pizza.php';
require_once 'PepperoniPizza.php';
require_once 'PizzaStore.php';

(new PizzaStore())->orderPizza('pepperoni');