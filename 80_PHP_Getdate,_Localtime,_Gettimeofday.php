<?php

//! The getdate() function returns date/time information of a timestamp or the current local date/time. Syntax. getdate(timestamp).

print_r(getdate());


//! The localtime() function returns the local time. Syntax. localtime(timestamp, is_assoc). Parameter Values. 

print_r(localtime());


//! The gettimeofday() function returns the current time. Syntax. gettimeofday(return_float). Parameter Values.
echo gettimeofday(true);