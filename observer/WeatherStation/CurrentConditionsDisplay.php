<?php

class CurrentConditionsDisplay extends AbstractDisplay
{
    public function display()
    {
        echo 'Current conditions: temperature ' . $this->temperature . ', himidity ' . $this->himidity . ', pressure ' . $this->pressure . PHP_EOL;
    }
}