<?php

//! The date() function formats a local date and time, and returns the formatted date string. Syntax. date(format, timestamp).

$today_1 = date("F j, Y, g:i a"); // March 10, 2001, 5:16 pm
$today_2 = date("m.d.y"); // 03.10.01
$today_3 = date("j, n, Y"); // 10, 3, 2001
$today_4 = date("Ymd"); // 20010310
$today_5 = date('h-i-s, j-m-y, it is w Day'); // 05-16-18, 10-03-01, 1631 1618 6 Satpm01
$today_6 = date('\i\t \i\s \t\h\e jS \d\a\y.'); // It is the 10th day (10ème jour du mois).
$today_7 = date("D M j G:i:s T Y"); // Sat Mar 10 17:16:18 MST 2001
$today_8 = date('H:m:s \m \e\s\t\ \l\e\ \m\o\i\s'); // 17:03:18 m est le mois
$today_9 = date("H:i:s"); // 17:16:18
$today_10 = date("Y-m-d H:i:s"); // 2001-03-10 17:16:18 (le format DATETIME de MySQL)

echo "$today_1" . "<br>";
echo "$today_2" . "<br>";
echo "$today_3" . "<br>";
echo "$today_4" . "<br>";
echo "$today_5" . "<br>";
echo "$today_6" . "<br>";
echo "$today_7" . "<br>";
echo "$today_8" . "<br>";
echo "$today_9" . "<br>";
echo "$today_10" . "<br>";