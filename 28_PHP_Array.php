<?php

$x = array(10, 20, 30);
$y = [10, 20, 30];

echo $x[1];
print_r($y);

for($i = 0; $i < count($y); $i++ ){
    echo $y[$i]."\n";
}