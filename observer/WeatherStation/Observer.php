<?php

interface Observer
{
    public function update($temperature, $himidity, $pressure);
}