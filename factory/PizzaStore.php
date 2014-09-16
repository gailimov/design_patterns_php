<?php

abstract class PizzaStore
{
    public function order($type)
    {
        $pizza = $this->create($type);

        $pizza
            ->prepare()
            ->bake()
            ->cut()
            ->box();

        return $pizza;
    }

    abstract public function create($type);
}