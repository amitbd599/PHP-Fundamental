<?php


$x = ['A', 'B', 'C', 'D'];
$y = ['E', 'F'];

/* 
array_merge();                  //! index or associative array
array_merge_recursive();        //! Multidimensional associative array
array_combine();                //! index array
*/


//! The array_merge() function merges one or more arrays into one array

$result = array_merge($x, $y); //Array ( [0] => A [1] => B [2] => C [3] => D [4] => E [5] => F )

print_r($result);


//!The array_merge_recursive() function merges one or more arrays into one array

$x_1 = ['a' => 'A', 'b' => 'B', 'c' => 'C', 'd' => 'D'];
$y_1 = ['b' => 'E', 'e' => 'F'];

$result_1 = array_merge_recursive($x_1, $y_1);
/*
(
    [a] => A
    [b] => Array
        (
            [0] => B
            [1] => E
        )

    [c] => C
    [d] => D
    [e] => F
)
*/
echo "<pre>";
print_r($result_1);
echo "</pre>";



//! The array_combine() function creates an array by using the elements from one "keys" array and one "values" array

$x_2 = ['a', 'b', 'c', 'd'];
$y_2 = ['A', 'B', 'C', 'D'];

$result_2 = array_combine($x_2, $y_2);

/* 

Array
(
    [a] => A
    [b] => B
    [c] => C
    [d] => D
)

*/

echo "<pre>";
print_r($result_2);
echo "</pre>";