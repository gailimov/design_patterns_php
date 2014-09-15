<?php

class HouseBlend extends Beverage
{
    public function __construct()
    {
        $this->description = 'House Blend';
    }

    public function cost()
    {
        $cost = parent::cost();

        return $cost += 3.52;
    }
}