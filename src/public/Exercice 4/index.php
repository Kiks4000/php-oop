<?php

/* EXERCISE 4
Copy the code of exercise 3 to here and delete everything related to cola.
TODO: Make all properties protected.
TODO: Make all the other prints work without error without changing the beverage class.
TODO: Don't call getters in de child class.
USE TYPEHINTING EVERYWHERE!
*/

class BeverageThree
{
    protected string $color;
    protected float $price;
    protected string $temperature;

    public function __construct(string $color, float $price, string $temperature = "cold")
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

class Beeruu extends BeverageThree
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

    public function setAlcoholPercentage(int $alcoholPercentage):void
    {
        $this->alcoholPercentage = $alcoholPercentage;
    }

    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    public function beerInfo():string
    {
        return "Hi i'm " . $this->name . " and have an alcohol percentage of " . $this->alcoholPercentage . " and I have a " . $this->color . " color.";
    }
}

$Duvel = new Beeruu("blond", 3.5, "cold", "Duvel", 8.5);

echo $Duvel->beerInfo();
echo "<br>";
echo "<br>";
echo "<a href='../index.php'>Go back to the index</a>";