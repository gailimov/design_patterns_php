<?php

abstract class Beverage
{
    protected $description;

    public function getDescription()
    {
        return $this->description;
    }

    abstract public function cost();
}