<?php


//! The strcmp() function compares two strings.
echo strcmp("Hello world!", "Hello world!"); // 0
echo strcmp("Hello world!", "Hello world! PHP"); // -4


//! The strncmp() function compares two strings. Note: The strncmp() is binary-safe and case-sensitive.
echo strncmp("Hello world!", "Hello earth!", 6); //0

//! The strncasecmp() function compares two strings.
echo strncasecmp("Hello world!", "hello earth!", 6);

//! The similar_text() function calculates the similarity between two strings. It can also calculate the similarity of the two strings in percent.
echo similar_text("Hello World", "Hello Peter"); //7
