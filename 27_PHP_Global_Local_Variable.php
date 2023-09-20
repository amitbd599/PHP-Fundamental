<?php

$globalVariable = "globalVariable!";

function myFunction()
{
    global $globalVariable;
    $localVariable = "localVariable!";
    echo $globalVariable;
    echo $localVariable;
}

myFunction();