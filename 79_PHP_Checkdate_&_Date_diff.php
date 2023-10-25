<?php

//! The checkdate() function is used to validate a Gregorian date. Syntax. checkdate(month, day, year). 
var_dump(checkdate(12, 31, -400));
echo "<br>";
var_dump(checkdate(2, 29, 2003));
echo "<br>";
var_dump(checkdate(2, 29, 2004));




//! The date_diff() function returns the difference between two DateTime objects. Syntax. date_diff(datetime1, datetime2, absolute). 

$date1 = date_create("2013-03-15");
$date2 = date_create("2013-12-12");
$diff = date_diff($date1, $date2);


print_r($diff->days);