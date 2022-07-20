<?php

/* EXERCISE 1
TODO: Create a class Beverage.
TODO: Create the properties color (string), price (float) and temperature (string) and also foresee a construct.
TODO: Have a default value "cold" in the construct for temperature.
Remember for now we will use properties and methods that can be accessed from everywhere.

TODO: Make a getInfo function which returns "This beverage is <temperature> and <color>."
        TODO: Instantiate an object which represents cola. Make sure that the color is set to black, the price
        equals 2 euro and the temperature to cold automatically
        print the getInfo on the screen.
        TODO: Print the temperature on the screen.
        USE TYPEHINTING EVERYWHERE!
        */

namespace exercice1;

$cola = new BeverageOne("black", 2);
echo $cola->getInfo();
echo "<br>";
echo $cola->getTemperature();
echo "<br>";
echo "<br>";
echo "<a href='../index.php'>Go back to the index</a>";


