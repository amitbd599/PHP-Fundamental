<?php

//! The array_fill() function fills an array with values. 
// Syntax. array_fill(index, number, value).
$arr_fill = array_fill(5, 5, "PHP");

echo "<pre>";
print_r($arr_fill);
echo "</pre>";



//! The array_fill_keys() function fills an array with values, specifying keys. 
// Syntax. array_fill_keys(keys, value).
$keys = array("a", "b", "c", "d");
$a1 = array_fill_keys($keys, "blue");

echo "<pre>";
print_r($a1);
echo "</pre>";