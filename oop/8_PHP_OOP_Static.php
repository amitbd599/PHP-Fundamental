<?php

// Static methods can be called directly - without creating an instance of the class first.
class greeting
{

    public static $name = "Google";

    public static function welcome()
    {
        echo self::$name;
    }
}

// Call static method
greeting::welcome(); //! To access a static method use the class name, double colon (::),




?>