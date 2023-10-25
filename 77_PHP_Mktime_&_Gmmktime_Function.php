<?php
$timestamp = mktime(0, 0, 0, 8, 15, 2022);
echo $timestamp;


//! The gmmktime() function returns the Unix timestamp for a GMT date.
echo "Oct 3, 1975 was on a " . date("l", gmmktime(0, 0, 0, 10, 3, 1975));