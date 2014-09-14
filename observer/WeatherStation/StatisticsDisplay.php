<?php

class StatisticsDisplay implements SplObserver, DisplayElement
{
    private $maxTemp = 0.0;
    private $minTemp = 200;
    private $tempSum = 0.0;
    private $numReadings;

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
            $temperature = $weatherData->getTemperature();

            $this->tempSum += $temperature;
            $this->numReadings++;

            if ($temperature > $this->maxTemp) {
                $this->maxTemp = $temperature;
            }

            if ($temperature < $this->minTemp) {
                $this->minTemp = $temperature;
            }

            $this->display();
        }
    }

    public function display()
    {
        echo 'AVG/MAX/MIN temperature = ' . ($this->tempSum / $this->numReadings) . '/' . $this->maxTemp . '/' . $this->minTemp . PHP_EOL;
    }
}