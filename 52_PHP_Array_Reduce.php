<?php

//! The array_reduce() function sends the values in an array to a user-defined function, and returns a string. 

// array_reduce(array, function, initial)

$a = array(2,3,5);

function myFun($n, $m)
{
        return $n + $m;
}

$result = array_reduce($a, 'myFun', 4);

echo "<pre>";
print_r($result);
echo "</pre>";