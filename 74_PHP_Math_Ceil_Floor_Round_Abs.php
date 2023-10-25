<?php

//! The abs() function returns the absolute (positive) value of a number. Syntax. abs(number);. Parameter Values. 
echo (abs(6.7) . "<br>");
echo (abs(-6.7) . "<br>");
echo (abs(-3) . "<br>");
echo (abs(3));


//! The round() function rounds a floating-point number.
echo (round(0.60) . "<br>");
echo (round(0.50) . "<br>");
echo (round(0.49) . "<br>");
echo (round(-4.40) . "<br>");
echo (round(-4.60));


//! The floor() function rounds a number DOWN to the nearest integer, if necessary, and returns the result. 
echo floor(4.3); // 4
echo floor(9.999); // 9
echo floor(-3.14); // -4

//! The ceil() function rounds a number UP to the nearest integer,
echo (ceil(0.60) . "<br>");
echo (ceil(0.40) . "<br>");
echo (ceil(5) . "<br>");
echo (ceil(5.1) . "<br>");
echo (ceil(-5.1) . "<br>");
echo (ceil(-5.9));