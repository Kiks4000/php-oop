<?php

namespace exercice3;

class Beverage
{
    private string $color;
    private float $price;
    private string $temperature;

    public function __construct(string $color, float $price, string $temperature)
    {
        $this->color = $color;
        $this->price = $price;
        $this->temperature = $temperature;
    }

    public function setInfo(string $color, float $price, string $temperature): void
    {
        $this->color = $color;
        $this->price = $price;
        $this->temperature = $temperature;
    }

    public function getInfo(): string
    {
        return "The color is " . $this->color . " and the price is " . $this->price . " euro. The temperature is " . $this->temperature . ".";
    }

    public function setTemperature(string $temperature): void
    {
        $this->temperature = $temperature;
    }

    public function getTemperature(): string
    {
        return $this->temperature;
    }

    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    public function getColor(): string
    {
        return $this->color;
    }
}
