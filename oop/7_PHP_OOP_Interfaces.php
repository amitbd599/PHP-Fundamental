<?php

// Interfaces cannot have properties, while abstract classes can
// All interface methods must be public, while abstract class methods is public or protected
// All methods in an interface are abstract, so they cannot be implemented in code and the abstract keyword is not necessary
// Classes can implement an interface while inheriting from another class at the same time


interface parent_1
{
     function calc($a, $b);
    
}


interface parent_2
{
    function sub($c, $d);
    
}


class childClass implements parent_1, parent_2
{
    public function calc($a, $b)
    {
        echo $a + $b;
    }

    public function sub($c, $d)
    {
        echo $c - $d;
    }
}


$res = new childClass();

$res->calc(10, 20);
$res->sub(30, 20);