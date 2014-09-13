<?php

class MallardDuck extends Duck implements Quackable, Flyable
{
    public function display()
    {
        return 'displaying mallard duck';
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