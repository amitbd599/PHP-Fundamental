<?php


$x = ['A', 'B', 'C', 'D'];
$y = ['E', 'F'];



//! The array_splice() function removes selected elements from an array and replaces it with new elements. 

// array_splice(array, start, length, array-2)

$result = array_splice($x, 1, 2, $y);
/*
Array
(
    [0] => B
    [1] => C
)
*/

echo "<pre>";
print_r($result);
echo "</pre>";

/*

Array
(
    [0] => A
    [1] => E
    [2] => F
    [3] => D
)
*/