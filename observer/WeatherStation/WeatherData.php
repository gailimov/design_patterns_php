<?php

class WeatherData
{
    /**
     * @var CurrentConditionsDisplay
     */
    protected $currentConditionsDisplay;

    /**
     * @var StatisticsDisplay
     */
    protected $statisticsDisplay;

    /**
     * @var ForecastDisplay
     */
    protected $forecastDisplay;

    public function __construct(CurrentConditionsDisplay $currentConditionsDisplay, StatisticsDisplay $statisticsDisplay, ForecastDisplay $forecastDisplay)
    {
        $this->currentConditionsDisplay = $currentConditionsDisplay;
        $this->statisticsDisplay = $statisticsDisplay;
        $this->forecastDisplay = $forecastDisplay;
    }

    public function getTemperature()
    {
        return 22;
    }

    public function getHimidity()
    {
        return 50;
    }

    public function getPressure()
    {
        return 600;
    }

    public function measurementsChanged()
    {
        $temperature = $this->getTemperature();
        $himidity = $this->getHimidity();
        $pressure = $this->getPressure();

        $this->currentConditionsDisplay->update($temperature, $himidity, $pressure);
        $this->statisticsDisplay->update($temperature, $himidity, $pressure);
        $this->forecastDisplay->update($temperature, $himidity, $pressure);
    }
}