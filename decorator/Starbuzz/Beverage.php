<?php

abstract class Beverage
{
    protected $description;
    protected $milk = false;
    protected $mocha = false;
    protected $whip = false;

    public function getDescription()
    {
        return $this->description;
    }

    public function cost()
    {
        $cost = 0;

        if ($this->hasMilk()) {
            $cost += 0.5;
        }

        if ($this->hasMocha()) {
            $cost += 1.5;
        }

        if ($this->hasWhip()) {
            $cost += 1;
        }

        return $cost;
    }

    public function hasMilk()
    {
        return $this->milk == true;
    }

    public function setMilk()
    {
        $this->milk = true;
        $this->description .= ', Milk';

        return $this;
    }

    public function hasMocha()
    {
        return $this->mocha == true;
    }

    public function setMocha()
    {
        $this->mocha = true;
        $this->description .= ', Mocha';

        return $this;
    }

    public function hasWhip()
    {
        return $this->whip == true;
    }

    public function setWhip()
    {
        $this->whip = true;
        $this->description .= ', Whip';

        return $this;
    }
}