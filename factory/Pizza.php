<?php

abstract class Pizza
{
    protected $name;

    public function __construct()
    {
        echo $this->name . PHP_EOL;
    }

    public function prepare()
    {
        echo 'Preparing...' . PHP_EOL;
        return $this;
    }

    public function bake()
    {
        echo 'Baking...' . PHP_EOL;
        return $this;
    }

    public function cut()
    {
        echo 'Cutting...' . PHP_EOL;
        return $this;
    }

    public function box()
    {
        echo 'Boxing... Done.' . PHP_EOL;
        return $this;
    }
}