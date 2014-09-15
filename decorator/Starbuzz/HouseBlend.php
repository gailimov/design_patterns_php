<?php

class HouseBlend extends Beverage
{
    public function __construct()
    {
        $this->desctiption = 'House Blend';
    }

    public function cost()
    {
        return 3.52;
    }
}