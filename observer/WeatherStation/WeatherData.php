<?php

class WeatherData implements Subject
{
    private $observers = [];
    private $temperature;
    private $himidity;
    private $pressure;

    public function registerObserver(Observer $o)
    {
        $this->observers[] = $o;
    }

    public function removeObserver(Observer $o)
    {
        if ($observers[$o]) {
            unset($this->observers[$o]);
        }
    }

    public function notifyObservers()
    {
        for ($i = 0, $count = count($this->observers); $i < $count; $i++) {
            $this->observers[$i]->update($this->temperature, $this->himidity, $this->pressure);
        }
    }

    public function measurementsChanged()
    {
        $this->notifyObservers();
    }

    public function setMeasurements($temperature, $himidity, $pressure)
    {
        $this->temperature = $temperature;
        $this->himidity = $himidity;
        $this->pressure = $pressure;

        $this->measurementsChanged();
    }
}