<?php

abstract class Duck
{
    public function swim()
    {
        return 'swimming...';
    }

    abstract public function display();
}