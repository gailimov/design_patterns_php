<?php

require_once 'AbstractDisplay.php';
require_once 'CurrentConditionsDisplay.php';
require_once 'StatisticsDisplay.php';
require_once 'ForecastDisplay.php';
require_once 'WeatherData.php';

$current = new CurrentConditionsDisplay();
$statistics = new StatisticsDisplay();
$forecast = new ForecastDisplay();

$current->display();
$statistics->display();
$forecast->display();

$weather = new WeatherData($current, $statistics, $forecast);
$weather->measurementsChanged();

echo '=== Measurements changed ===' . PHP_EOL;

$current->display();
$statistics->display();
$forecast->display();