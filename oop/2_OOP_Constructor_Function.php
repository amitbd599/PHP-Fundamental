<?php

class person
{
    public $name;


    //! Constructor Function
    function __construct($n)
    {
        echo $this->name = $n;
    }

    function show()
    {
        echo "Name :" . $this->name;
    }

}


$res = new person("Anik");
$res->name = "Amit";
$res->show();