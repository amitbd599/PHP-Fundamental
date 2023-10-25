<?php

//! The array_walk() function runs each array element in a user-defined function

function myfunction($value, $key)
{
    echo "The key $key has the value $value<br>";
}


$a = array("a" => "red", "b" => "green", "c" => "blue");

array_walk($a, "myfunction");



//! The array_walk_recursive() function runs each array element in a user-defined function
function myfunction2($value, $key)
{
    echo "The key $key has the value $value<br>";
}


$a1 = array("a" => "red", "b" => "green");
$a2 = array($a1, "1" => "blue", "2" => "yellow");


array_walk_recursive($a2, "myfunction2");


?>