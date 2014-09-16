<?php

abstract class Pizza
{
    protected $name;
    protected $dough;
    protected $sauce;
    protected $toppings = [];

    public function prepare()
    {
        echo 'Preparing ' . $this->name . PHP_EOL;
        echo 'Tossing dough...' . PHP_EOL;
        echo 'Adding sauce...' . PHP_EOL;
        echo 'Adding toppings...' . PHP_EOL;

        for ($i = 0, $count = count($this->toppings); $i < $count; $i++) {
            echo '  ' . $this->toppings[$i] . PHP_EOL;
        }

        return $this;
    }

    public function bake()
    {
        echo 'Bake for 25 minutes at 350' . PHP_EOL;

        return $this;
    }

    public function cut()
    {
        echo 'Cutting the pizza into diagonal slices' . PHP_EOL;

        return $this;
    }

    public function box()
    {
        echo 'Place pizza in official PizzaStore box' . PHP_EOL;

        return $this;
    }

    public function getName()
    {
        return $this->name;
    }
}