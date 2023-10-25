<?php

//! The strip_tags() function strips a string from HTML, XML, and PHP tags. Note: HTML comments are always stripped.

echo strip_tags("Hello <b>world!</b>");

//! The wordwrap() function wraps a string into new lines when it reaches a specific length. Note: This function may leave white spaces at the beginning of a line.

$str = "An example of a long word is: Supercalifragulistic";
echo wordwrap($str, 15, "<br>\n");