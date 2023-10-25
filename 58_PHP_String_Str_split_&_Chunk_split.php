<?php

//! The str_split() function splits a string into an array. Syntax. str_split(string,length). 
print_r(str_split("Hello")); //Array ( [0] => H [1] => e [2] => l [3] => l [4] => o )



//! The chunk_split() function splits a string into a series of smaller parts.

// chunk_split(string,length,end)
$str = "Hello world!";
echo chunk_split($str, 1, ".");