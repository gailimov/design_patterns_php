<?php

class ChicagoPizzaStore extends PizzaStore
{
    public function create($item)
    {
        switch ($item) {
            case 'cheese':
                $item = new ChicagoStyleCheesePizza();
                break;
            case 'pepperoni':
                $item = new ChicagoStylePepperoniPizza();
                break;
            case 'veggie':
                $item = new ChicagoStyleVeggiePizza();
                break;
            default:
                $item = null;
        }

        return $item;
    }
}