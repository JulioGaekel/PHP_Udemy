<?php

// To call any static data (variables, methods), the syntax will first call the class, followed by two double points and the name of the data.
// ClassName::$variableName;
// ClassName::MethodName();

// Create a class
class Car {
    // Use static keyword to declare a static value. Now property is attached to the class and not instances.
    static $wheel = 4; // To refer to this property we use two double dots (::)
    var $hood = 1;

    function MoveWheels() {
//        echo "Wheels are moving";
        // Properties may be changed within a specific method using the keyword "$this"
        $this->wheel = 10;
    }
}

// Create a new instance of a class by instantiating. Also called and object
$bmw = new Car();

// $bmw->wheel; // Does not display anything (some cases displays error)

// Proper way to call static property
echo Car::$wheel; // Displays value of the variable
