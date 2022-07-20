<?php

namespace exercice3;

class Beer extends Beverage
{
    protected string $name;
    protected int $alcoholPercentage;

    public function __construct(string $color, float $price, string $temperature, string $name, int $alcoholPercentage)
    {
        parent::__construct($color, $price, $temperature);
        $this->name = $name;
        $this->alcoholPercentage = $alcoholPercentage;
    }

    public function setName(string $name):void
    {
        $this->name = $name;
    }

    public function getName():string
    {
        return $this->name;
    }

    public function setAlcoholPercentage(int $alcoholPercentage):void
    {
        $this->alcoholPercentage = $alcoholPercentage;
    }

    public function getAlcoholPercentage():int
    {
        return $this->alcoholPercentage;
    }

    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function beerInfo():string
    {
        return "Hi i'm " . $this->name . " and have an alcohol percentage of " . $this->alcoholPercentage . " and I have a " . $this->color . " color.";
    }
}