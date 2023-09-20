<?php

function wow()
{
    echo "Hello";
}


$myFun = "wow";

if (is_callable($myFun)) {
    echo $myFun();
} else {
    echo "Not callable";
}