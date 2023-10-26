<?php

//! Type hinting is a concept that provides hints to function for the expected data type of arguments. 



function sum(array $v)
{
    foreach ($v as $k) {
        echo $k . " ";
    }
}


sum(array(10, 12, 15, 42));