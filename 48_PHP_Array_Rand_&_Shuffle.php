<?php

//! The array_rand() function returns a random key from an array
$indexedArray = array("red", "blue", "green", "black");
echo $indexedArray[array_rand($indexedArray)];


//! The shuffle() function randomizes the order of the elements in the array. 
$my_array = array("red", "green", "blue", "yellow", "purple");

shuffle($my_array);
print_r($my_array);

?>