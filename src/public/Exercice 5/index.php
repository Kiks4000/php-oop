<?php

/* EXERCISE 5
Copy the class of exercise 1.
TODO: Change the properties to private.
TODO: Fix the errors by using getter and setter functions.
TODO: Change the price of the cola to 3.5 euro (this is the inflation) and print it also on the screen on a new line.
*/

namespace exercice5;

$cola = new Beverage("black", 2);

echo $cola->getInfo();
echo "<br>";
echo $cola->getTemperature();
echo "<br>";
echo "<br>";
echo "<a href='../index.php'>Go back to the index</a>";