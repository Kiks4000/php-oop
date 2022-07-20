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

namespace exercice3;

$Duvel = new Beer("blond", 3.5, "cold", "Duvel", 8.5);

echo $Duvel->getAlcoholPercentage();
echo "<br>";
echo $Duvel->getInfo();
echo "<br>";
$Duvel->setColor("light");
echo "<br>";
echo $Duvel->getColor();
echo "<br>";
echo $Duvel->beerInfo();
echo "<br>";
echo "<br>";
echo "<a href='../index.php'>Go back to the index</a>";