<?php

//!The bin2hex() function converts a string of ASCII characters to hexadecimal values. The string can be converted back using the pack() function. 

$str = bin2hex("Hello World!");
echo ($str);


//! The hex2bin() function converts a string of hexadecimal values to ASCII characters. Syntax. hex2bin(string). 

echo hex2bin("48656c6c6f20576f726c6421");