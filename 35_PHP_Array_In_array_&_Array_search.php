<?php

$food = array('orange', 'banana', 'mango', 'apple');


//! The in_array() function searches an array for a specific value.

// echo in_array('orange', $food); //return true or false


//! The array_search() function search an array for a value and returns the key.

echo array_search('apple', $food); //return index or false