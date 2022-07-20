<?php

namespace exercice2;

class Beer extends Beverage
{
    public string $name;
    public int $alcoholPercentage;

    public function __construct(string $color, float $price, string $temperature, string $name, int $alcoholPercentage)
    {
        parent::__construct($color, $price, $temperature);
        $this->name = $name;
        $this->alcoholPercentage = $alcoholPercentage;
    }

    public function getAlcoholPercentage():int
    {
        return $this->alcoholPercentage;
    }

    public function getTemperature():int
    {
        return $this->temperature;
    }
}