<?php

class ForecastDisplay implements Observer, DisplayElement
{
    private $currentPressure = 29.92;
    private $lastPressure;

    /**
     * @var Subject
     */
    private $weatherData;

    public function __construct(Subject $weatherData)
    {
        $this->weatherData = $weatherData;
        $this->weatherData->registerObserver($this);
    }

    public function update($temperature, $himidiy, $pressure)
    {
        $this->lastPressure = $this->currentPressure;
        $this->currentPressure = $pressure;

        $this->display();
    }

    public function display()
    {
        echo 'Forecast: ';
        if ($this->currentPressure > $this->lastPressure) {
            echo 'Improving weather on the way!' . PHP_EOL;
        } elseif ($this->currentPressure == $this->lastPressure) {
            echo 'More of the same' . PHP_EOL;
        } else {
            echo 'Watch out for cooler, rainy weather' . PHP_EOL;
        }
    }
}