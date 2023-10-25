<?php

//! The date_create() function returns a new DateTime object. Syntax. date_create(time, timezone). 
$date = date_create("2013-03-15");
echo date_format($date, "Y/m/d");