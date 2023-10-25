<?php

$x = ['A', 'B', 'C', 'D'];

//! The array_shift() function removes the first element from an array, and returns the value of the removed element

array_shift($x); // remove first element 'A'
print_r($x);


//! The array_unshift() function inserts new elements to an array.

array_unshift($x, "K"); // Add new item 'K'
print_r($x);



