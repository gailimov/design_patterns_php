<?php

class RubberDuck extends Duck implements Quackable
{
    public function quack()
    {
        return 'squeak';
    }

    public function display()
    {
        return 'displaying rubber duck';
    }
}