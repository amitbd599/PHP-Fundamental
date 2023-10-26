<?php
/**
 * abstract means incomplete
 * abstract class contains atleast 1 abstract function
 * abstract function:- we must declare it but not implement it, it can not contain body
 * you can't create object of abstract method
 * abstract class, child class must contain abstract function
 */
abstract class Bank
{
    abstract function id_proof();
}
class Hdfc extends Bank
{
    function id_proof()
    {
        echo "hdfc bank";
    }
}
class Axis extends Bank
{
    function id_proof()
    {
        echo "<br>axis bank<br>";
    }
}

$obj = new Axis();
$obj->id_proof();

$obj1 = new Hdfc();
$obj1->id_proof();
?>