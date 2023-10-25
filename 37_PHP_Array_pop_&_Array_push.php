<?php

//!The array_pop() function deletes the last element of an array

$x = ['A', 'B', 'C', 'D'];

$result = array_pop($x); // delete 'D'
print_r($result);


//! The array_push() function inserts one or more elements to the end of an array

$res = array_push($x, "G"); // Add new item
print_r($x);