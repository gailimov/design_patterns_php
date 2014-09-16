<?php

class PizzaStore
{
    public function orderPizza($type)
    {
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

        $pizza
            ->prepare()
            ->bake()
            ->cut()
            ->box();

        return $pizza;
    }
}