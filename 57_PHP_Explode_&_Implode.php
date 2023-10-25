<?php


//! The explode() function breaks a string into an array. 
$str = "Hello world. It's a beautiful day.";
$split = explode(" ", $str);
$hello = $split[0];
$world = $split[1];

print_r($split);



//! The implode() function returns a string from the elements of an array.

$arr = array('Hello', 'World!', 'Beautiful', 'Day!');
echo implode(" ", $arr);

?>