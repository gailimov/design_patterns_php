<?php

abstract class Duck
{
    public function quack()
    {
        return 'quack-quack';
    }

    public function swim()
    {
        return 'swimming...';
    }

    abstract public function display();
}