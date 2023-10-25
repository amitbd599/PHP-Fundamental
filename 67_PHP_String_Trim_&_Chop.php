<?php


//! The trim() function removes whitespace and other predefined characters from both sides of a string.
$string = " Hello world ";
$trimmedString = trim($string);
echo $trimmedString; //Hello world

$str = "Hello World!";
echo trim($str, "Hed!"); //llo Worl



//! The chop() function removes whitespaces or other predefined characters from the right end of a string.

$str = "Hello World!";
echo chop($str,"World!");