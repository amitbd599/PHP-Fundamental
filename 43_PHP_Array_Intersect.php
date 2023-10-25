<?php


$a1 = array("a" => "red", "b" => "green", "c" => "blue", "d" => "yellow");
$a2 = array("e" => "red", "f" => "green", "g" => "blue");


//! This function compares the values of two or more arrays, and return an array that contains the entries from array1 that are present in array2, array3, etc

$result = array_intersect($a1, $a2); //match only value
print_r($result); //Array ( [a] => red [b] => green [c] => blue )