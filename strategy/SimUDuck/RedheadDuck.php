<?php

class RedheadDuck extends Duck implements Quackable, Flyable
{
    public function display()
    {
        return 'displaying redhead duck';
    }

    public function quack()
    {
        return 'quack-quack';
    }

    public function fly()
    {
        return 'flying...';
    }
}