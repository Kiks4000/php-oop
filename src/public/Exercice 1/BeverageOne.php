<?php

namespace exercice1;

class BeverageOne
{
    public $color;
    public $price;
    public $temperature;

    public function __construct($color, $price, $temperature = "cold")
    {
        $this->color = $color;
        $this->price = $price;
        $this->temperature = $temperature;
    }

    public function getInfo()
    {
        return "This beverage is $this->temperature and $this->color.";
    }

    public function getTemperature()
    {
        return $this->temperature;
    }

    public function getColor()
    {
        return $this->color;
    }
}