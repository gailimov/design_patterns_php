<?php

class CurrentConditionsDisplay implements Observer, DisplayElement
{
    private $temperature;
    private $himidity;

    /**
     * @var Subject
     */
    private $weatherData;

    public function __construct(Subject $weatherData)
    {
        $this->weatherData = $weatherData;
        $this->weatherData->registerObserver($this);
    }

    public function update($temperature, $himidity, $pressure)
    {
        $this->temperature = $temperature;
        $this->himidity = $himidity;

        $this->display();
    }

    public function display()
    {
        echo 'Current conditions: ' . $this->temperature . 'F degrees and ' . $this->himidity . '% himidity' . PHP_EOL;
    }
}