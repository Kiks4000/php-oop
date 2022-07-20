<?php

/* EXERCISE 4
Copy the code of exercise 3 to here and delete everything related to cola.
TODO: Make all properties protected.
TODO: Make all the other prints work without error without changing the beverage class.
TODO: Don't call getters in de child class.
USE TYPEHINTING EVERYWHERE!
*/


namespace exercice4;

$Duvel = new Beer("blond", 3.5, "cold", "Duvel", 8.5);

echo $Duvel->beerInfo();
echo "<br>";
echo "<br>";
echo "<a href='../index.php'>Go back to the index</a>";