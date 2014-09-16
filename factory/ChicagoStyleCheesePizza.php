<?php

class ChicagoStyleCheesePizza extends Pizza
{
    public function __construct()
    {
        $this->name = 'Chicago Style Deep Dish Cheese Pizza';
        $this->dough = 'Extra Thisk Crust Dough';
        $this->sauce = 'Plum Tomato Sauce';
        $this->toppings[] = 'Shredded Mozarella Cheese';
    }

    public function cut()
    {
        echo 'Cutting the pizza into square slices' . PHP_EOL;

        return $this;
    }
}