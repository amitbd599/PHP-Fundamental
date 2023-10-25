<?php

//! The array_flip() function flips/exchanges all keys with their associated values in an array
$input = array("oranges", "apples", "pears");
$flipped = array_flip($input);

echo "<pre>";
print_r($flipped);
echo "</pre>";


//! The array_change_key_case() function changes all keys in an array to lowercase or uppercase. 
$emp_info = array('Sam' => 25, 'Smith' => 35, 'Jai' => 24, 'Hari' => 30, 'Smith Jonson' => 28, 'Jenny' => 32);
$upperCase = array_change_key_case($emp_info, CASE_UPPER);

echo "<pre>";
print_r($upperCase);
echo "</pre>";


$upperLower = array_change_key_case($emp_info, CASE_LOWER);

echo "<pre>";
print_r($upperLower);
echo "</pre>";