<!-- OOP stands for Object-Oriented Programming.


Object-oriented programming has several advantages over procedural programming:

OOP is faster and easier to execute
OOP provides a clear structure for the programs
OOP helps to keep the PHP code DRY "Don't Repeat Yourself", and makes the code easier to maintain, modify and debug
OOP makes it possible to create full reusable applications with less code and shorter development time -->


<?php


class myFun
{
    public $a, $b, $c; //! public - the property or method can be accessed from everywhere. This is default

    function sum()
    {
        $this->c = $this->a + $this->b;

        return $this->c;
    }
}


$newObj = new myFun();

$newObj->a = 5;
$newObj->b = 10;
echo $newObj->sum();