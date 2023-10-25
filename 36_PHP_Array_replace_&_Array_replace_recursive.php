<?php


$x = ['A', 'B', 'C', 'D'];
$y = ['E', 'F'];


//! The array_replace() function replaces the values of the first array with the values from following arrays.


$result = array_replace($x, $y);

print_r($result);



//! The array_replace_recursive() function replaces the values of the first array with the values from following arrays recursively.

$result = array_replace_recursive($x, $y);

print_r($result);