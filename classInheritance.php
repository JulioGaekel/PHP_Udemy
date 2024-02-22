<?php

// Syntax of a class: class className { }

// Create a class
class Car {

    // Keyword "var" allows us to create properties that we can use within our class
    var $wheel = 4;
    var $hood = 1;
    var $engine = 1;
    var $doors = 4;
    function MoveWheels() {
//        echo "Wheels are moving";
        // Properties may be changed within a specific method using the keyword "$this"
        $this->wheel = 10;

    }
}

// Create a new instance of a class by instantiating. Also called and object
$bmw = new Car();


// Create a new class
class Plane extends Car {
}

$tucano = new Plane();
/* Test inheritance. Plane object $tucano has 4 wheels even when no such var was declared. However, default values
can be overwritten in the specific class*/
echo $tucano->engine;

/*
// Check if class is properly created
if (class_exists("Car")) {
    echo "Class successfully created";
} else {
    echo "Failed to create class";
}*/

/*
// Check if method exists.
if (method_exists("Car", "MoveWheels")) {
    echo "The method exists";
} else {
    echo "Method does not exist";
}*/

