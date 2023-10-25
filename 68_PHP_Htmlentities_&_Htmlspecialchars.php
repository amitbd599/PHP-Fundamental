<?php

//! The htmlentities() function converts characters to HTML entities. 
$str = '<a href="https://www.w3schools.com">Go to w3schools.com</a>';
echo htmlentities($str);

//! The htmlspecialchars() function converts some predefined characters to HTML entities.
$str = "This is some <b>bold</b> text.";
echo htmlspecialchars($str);
?>