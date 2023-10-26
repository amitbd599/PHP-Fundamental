<?php

class parentClass
{
    public $name = "parent class";
    public function calc($a, $b){
        return $a + $b;
    }
}

class childClass extends parentClass
{
    public $name = "child class";
}


$res = new parentClass();
$res_1 = new childClass();


echo $res->name;
echo "<br>";
echo $res_1->name;
echo "<br>";
echo $res_1->calc(10,15);