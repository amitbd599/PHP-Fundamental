<?php


//! The extract() Function is an inbuilt function in PHP. The extract() function does array to variable conversion.

$my_array = array("a" => "Cat", "b" => "Dog", "c" => "Horse");

extract($my_array);

echo "\$a = $a; \$b = $b; \$c = $c";


// -----------

$a = "Original";
$my_array = array("a" => "Cat", "b" => "Dog", "c" => "Horse");

extract($my_array, EXTR_PREFIX_SAME, "dup");

echo "\$a = $a; \$b = $b; \$c = $c; \$dup_a = $dup_a";



//! The compact() function creates an array from variables and their values. Note: Any strings that does not match variable names will be skipped.

$pavbhaji = "My favourite food";
$burgur = "too yummy!";
$kajukatri = 'too sweet';
// it will convert variable into array


$arr = compact("pavbhaji", "burgur", 'kajukatri');

echo '<pre>';
print_r($arr);