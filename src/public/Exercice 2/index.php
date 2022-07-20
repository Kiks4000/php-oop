<?php
/* EXERCISE 2
TODO: Make class beer that extends from Beverage.
TODO: Create the properties name (string) and alcoholPercentage (float).
TODO: Foresee a construct that's allows us to use all the properties from beverage and that sets
the values for name and alcoholpercentage.
Remember for now we will use properties and methods that can be accessed from everywhere.
TODO: Make a getAlcoholPercentage function which returns the alocoholPercentage.
TODO: Instantiate an object which represents Duvel. Make sure that the color is set to blond, the price equals
3.5 euro and the temperature to cold automatically.
TODO: Also the name equal to Duvel and the alcohol percentage to 8,5%
TODO: Print the getAlcoholPercentage 2 times on the screen in two different ways, print the color on the
screen and the getInfo.
Make sure that each print is on a different line.
Try to get this error on the screen=
Fatal error: Uncaught Error: Call to undefined method Beverage::getAlcoholPercentage() in /var/www/becode/workshop/exercise2.php on line 64
USE TYPEHINTING EVERYWHERE!
*/

namespace exercice2;

require_once "Beverage.php";
require_once "Beer.php";

$Duvel = new Beer("blond", 3.5, "cold", "Duvel", 8.5);

echo $Duvel->getAlcoholPercentage();
echo "<br>";
echo $Duvel->getInfo();
echo "<br>";
echo $Duvel->getColor();
echo "<br>";
echo "<br>";
echo "<a href='../index.php'>Go back to the index</a>";