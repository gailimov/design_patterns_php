<?php

class ForecastDisplay implements SplObserver, DisplayElement
{
    private $currentPressure = 29.92;
    private $lastPressure;

    /**
     * @var SplSubject
     */
    private $weatherData;

    public function __construct(SplSubject $weatherData)
    {
        $this->weatherData = $weatherData;
        $this->weatherData->attach($this);
    }

    public function update(SplSubject $subject)
    {
        if ($subject instanceof WeatherData) {
            $weatherData = $subject;

            $this->lastPressure = $this->currentPressure;
            $this->currentPressure = $weatherData->getPressure();

            $this->display();
        }
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