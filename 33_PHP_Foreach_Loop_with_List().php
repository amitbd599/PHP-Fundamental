<?php

$data = [
    [1, "Amit", "Laravel Dev", 50000],
    [2, "Amit", "Laravel Dev", 50000],
    [3, "Amit", "Laravel Dev", 50000],
    [4, "Amit", "Laravel Dev", 50000]
];



//! list method work only array[] 
foreach ($data as list($a, $b, $c, $d)) {
    echo "$a $b $c $d <br>";
}



?>