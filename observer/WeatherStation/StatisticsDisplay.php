<?php

class StatisticsDisplay implements Observer, DisplayElement
{
    private $maxTemp = 0.0;
    private $minTemp = 200;
    private $tempSum = 0.0;
    private $numReadings;

    /**
     * @var Subject
     */
    private $weatherData;

    public function __construct(Subject $weatherData)
    {
        $this->weatherData = $weatherData;
        $this->weatherData->registerObserver($this);
    }

    public function update($temperature, $himidiry, $pressure)
    {
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

    public function display()
    {
        echo 'AVG/MAX/MIN temperature = ' . ($this->tempSum / $this->numReadings) . '/' . $this->maxTemp . '/' . $this->minTemp . PHP_EOL;
    }
}