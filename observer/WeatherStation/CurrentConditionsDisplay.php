<?php

class CurrentConditionsDisplay implements SplObserver, DisplayElement
{
    /**
     * SplSubject
     */
    private $subject;

    private $temperature;
    private $himidity;

    public function __construct(SplSubject $subject)
    {
        $this->subject = $subject;
        $this->subject->attach($this);
    }

    public function update(SplSubject $subject)
    {
        if ($subject instanceof WeatherData) {
            $weatherData = $subject;
            $this->temperature = $weatherData->getTemperature();
            $this->himidity = $weatherData->getHimidity();

            $this->display();
        }
    }

    public function display()
    {
        echo 'Current conditions: ' . $this->temperature . 'F degrees and ' . $this->himidity . '% himidity' . PHP_EOL;
    }
}