<?php

class NyPizzaStore extends PizzaStore
{
    public function create($item)
    {
        switch ($item) {
            case 'cheese':
                $item = new NyStyleCheesePizza();
                break;
            case 'pepperoni':
                $item = new NyStylePepperoniPizza();
                break;
            case 'veggie':
                $item = new NyStyleVeggiePizza();
                break;
            default:
                $item = null;
        }

        return $item;
    }
}