<?php


$array = ['a', 'b', 'c', 'd', 'e', 'f', 'g'];

$a = array(
    array(
        'id' => 5698,
        'first_name' => 'Peter',
        'last_name' => 'Griffin',
    ),
    array(
        'id' => 4767,
        'first_name' => 'Ben',
        'last_name' => 'Smith',
    ),
    array(
        'id' => 3809,
        'first_name' => 'Joe',
        'last_name' => 'Doe',
    )
);


//! The array_column() function returns the values from a single column in the input array. 

$last_names = array_column($a, 'last_name');
print_r($last_names);



//! The array_chunk() function splits an array into chunks of new arrays.

$chunckedArray = array_chunk($array, 3);

echo "<pre>";
print_r($chunckedArray);
echo "</pre>";

/*
Array
(
    [0] => Array
        (
            [0] => a
            [1] => b
            [2] => c
        )

    [1] => Array
        (
            [0] => d
            [1] => e
            [2] => f
        )

    [2] => Array
        (
            [0] => g
        )

)
*/


