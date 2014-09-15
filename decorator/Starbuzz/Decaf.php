<?php

class Decaf extends Beverage
{
    public function __construct()
    {
        $this->description = 'Decaf';
    }

    public function cost()
    {
        $cost = parent::cost();

        return $cost += 3;
    }
}