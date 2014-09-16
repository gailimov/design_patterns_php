<?php

class SimplePizzaFactory
{
    public function createPizza($type)
    {
        $pizza = null;

        switch ($type) {
            case 'cheese':
                $pizza = new CheesePizza();
                break;
            case 'pepperoni':
                $pizza = new PepperoniPizza();
                break;
            case 'veggie':
                $pizza = new VeggiePizza();
                break;
        }

        return $pizza;
    }
}