<?php

class DarkRoast extends Beverage
{
    public function __construct()
    {
        $this->description = 'Dark Roast';
    }

    public function cost()
    {
        $cost = parent::cost();

        return $cost += 4.15;
    }
}