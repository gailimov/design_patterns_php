<?php

class WeatherData implements SplSubject
{
    private $observers;
    private $temperature;
    private $himidity;
    private $pressure;

    public function __construct()
    {
        $this->observers = new SplObjectStorage();
    }

    public function attach(SplObserver $observer)
    {
        $this->observers->attach($observer);
    }

    public function detach(SplObserver $observer)
    {
        $this->observers->detach($observer);
    }

    public function notify()
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    public function measurementsChanged()
    {
        $this->notify();
    }

    public function setMeasurements($temperature, $himidity, $pressure)
    {
        $this->temperature = $temperature;
        $this->himidity = $himidity;
        $this->pressure = $pressure;

        $this->measurementsChanged();
    }

    public function getTemperature()
    {
        return $this->temperature;
    }

    public function getHimidity()
    {
        return $this->himidity;
    }

    public function getPressure()
    {
        return $this->pressure;
    }
}