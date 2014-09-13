<?php

class DecoyDuck extends Duck
{
    public function __construct()
    {
        $this->quackBehavior = new MuteQuack();
        $this->flyBehavior = new FlyNoWay();
    }

    public function display()
    {
        return 'displaying decoy duck';
    }
}