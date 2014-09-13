<?php

class RubberDuck extends Duck
{
    public function __construct()
    {
        $this->quackBehavior = new Squeak();
        $this->flyBehavior = new FlyNoWay();
    }

    public function display()
    {
        return 'displaying rubber duck';
    }
}