<?php

$arr_1 = array("a" => "car", "b" => "plane", "c" => "boat", "d" => "bike");
$arr_2 = array("e" => "car", "f" => "plane", "g" => "boat");


//! The array_diff() function compares the values of two (or more) arrays, and returns the differences. 

$result = array_diff($arr_1, $arr_2);
print_r($result);


//! The array_udiff() function compares the values of two or more arrays, and returns the differences.

$result = array_udiff($arr_1, $arr_2);
print_r($result);
