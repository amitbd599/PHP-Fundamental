<?php


$x = ['A', 'B', 'C', 'D'];
$y = array(
    'key1' => 'value1',
    'key2' => 'value2',
    'key3' => 'value3'
);


//! The array_keys() function returns an array containing the keys

$result = array_keys($y);

echo "<pre>";
print_r($result);
echo "</pre>";


//! This array_key_first function returns the first key without affecting the internal array pointer

$result_1 = array_key_first($y);

echo "<pre>";
print_r($result_1);
echo "</pre>";


//! The array_key_exists() function checks an array for a specified key, and returns true if the key exists and false if the key does not exist

$result_2 = array_key_exists("key2", $y); // 1

echo "<pre>";
print_r($result_2);
echo "</pre>";