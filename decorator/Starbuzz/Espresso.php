<?php

class Espresso extends Beverage
{
    public function __construct()
    {
        $this->description = 'Espresso';
    }

    public function cost()
    {
        $cost = parent::cost();

        return $cost += 3;
    }
}