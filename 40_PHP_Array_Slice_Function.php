<?php


$x = ['A', 'B', 'C', 'D'];



//! The array_slice() function returns selected parts of an array

$result = array_slice($x, 1, 2); //Array ( [0] => B [1] => C )
$result = array_slice($x, 1, 2, true); //Array ( [1] => B [2] => C )

print_r ($result);