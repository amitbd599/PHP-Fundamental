<?php


class employee
{
    public $name;
    public $age;
    public $salary;


    function __construct($name, $age, $salary)
    {
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
    }

    function info()
    {
        echo "<h2>Employee Profile</h2>";
        echo "Name :" . $this->name . "<br>";
        echo "Age :" . $this->age . "<br>";
        echo "Salary :" . $this->salary . "<br>";
    }
}


class manager extends employee
{

   

}


// $res = new employee("Amit", 27, 40000);
$res_2 = new manager("Amit", 27, 40000);


// $res_2->info();