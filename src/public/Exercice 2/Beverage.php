<?php

namespace exercice2;

class Beverage
{
    public string $color;
    public float $price;
    public string $temperature;

    public function __construct(string $color, float $price, string $temperature)
    {
        $this->color = $color;
        $this->price = $price;
        $this->temperature = $temperature;
    }

    public function getInfo():string
    {
        return "The color is " . $this->color . " and the price is " . $this->price . " euro. The temperature is " . $this->temperature . ".";
    }

    public function getTemperature():int
    {
        return $this->temperature;
    }

    public function getColor():string
    {
        return $this->color;
    }
}