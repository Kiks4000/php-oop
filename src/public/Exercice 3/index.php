<?php

/* EXERCISE 3
TODO: Copy the code of exercise 2 to here and delete everything related to cola.
TODO: Make all properties private.
TODO: Make all the other prints work without error.
TODO: After fixing the errors. Change the color of Duvel to light instead of blond and also print this new color on the screen after all the other things that were already printed (to be sure that the color has changed).
TODO: Create a new private method in the Beer class called beerInfo which returns "Hi i'm Duvel and have an alcohol percentage of 8.5 and I have a light color."
Make sure that you use the variables and not just this text line.
TODO: Print this method on the screen on a new line.
USE TYPEHINTING EVERYWHERE!
*/

class BeverageTwo
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

class Beeru extends BeverageTwo
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

$Duvel = new Beeru("blond", 3.5, "cold", "Duvel", 8.5);

echo $Duvel->getAlcoholPercentage();
echo "<br>";
echo $Duvel->getInfo();
echo "<br>";
echo $Duvel->setColor("light");
echo "<br>";
echo $Duvel->getColor();
echo "<br>";
echo $Duvel->beerInfo();
echo "<br>";
echo "<br>";
echo "<a href='../index.php'>Go back to the index</a>";