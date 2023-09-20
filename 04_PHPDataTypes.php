<?php
/*

Variables can store data of different types, and different data types can do different things.

PHP supports the following data types:

1) String
2) Integer
3) Float (floating point numbers - also called double)
4) Boolean
5) Array
6) Object
7) NULL
8) Resource

*/

// PHP String
$x = "Hello world!";
echo $x;

//PHP Integer
$x = 5985;
var_dump($x);

//PHP Float
$x = 10.365;
var_dump($x);

//PHP Boolean
$x = true;
$y = false;

//PHP Array
$cars = array("Volvo", "BMW", "Toyota");
var_dump($cars);

//PHP Object
class Car
{
    function Car()
    {
        $this->model = "VW";
    }
}

// create an object
$herbie = new Car();

// show object properties
echo $herbie->model;

//PHP NULL Value
$x = "Hello world!";
$x = null;
var_dump($x);


?>