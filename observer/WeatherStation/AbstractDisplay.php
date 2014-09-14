<?php

abstract class AbstractDisplay
{
    protected $temperature = 20;
    protected $himidity = 30;
    protected $pressure = 700;

    public function update($temperature, $himidity, $pressure)
    {
        $this->temperature = $temperature;
        $this->himidity = $himidity;
        $this->pressure = $pressure;
    }

    abstract public function display();
}