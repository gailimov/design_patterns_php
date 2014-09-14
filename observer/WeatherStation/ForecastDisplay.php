<?php

class ForecastDisplay extends AbstractDisplay
{
    public function display()
    {
        echo 'Forecast: +' . ($this->temperature - 5) . PHP_EOL;
    }
}