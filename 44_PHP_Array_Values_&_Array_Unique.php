<?php

$arr_1 = array("a" => "car", "b" => "plane", "c" => "boat", "d" => "bike", 'e' => "boat");

$result = array_values($arr_1);

print_r($result);


//! The array_unique() function removes duplicate values from an array. If two or more array values are the same

$result = array_unique($arr_1);
print_r($result);