<?php


//! The list() function is used to assign values to a list of variables in one operation.

$cars = array("Volvo", "BMW", "Toyota");

list($a, $b, $c) = $cars;

echo "$a";
echo "$b";
echo "$c";