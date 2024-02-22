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
$audi = new Car();

// Use a method on a specific object (use "->")
/*$bmw->MoveWheels();
$audi->MoveWheels();*/

// We can change the value of a default property of an object with the following. Notice we dont use the $ sign anymore
echo "The BMW has " . $bmw->wheel . " wheels <br>"; // Check default property value for this object
$bmw->wheel = 8; // Change property value directly to object
echo "The BMW has " . $bmw->wheel . " wheels <br>";
$bmw->MoveWheels(); // Property value changed in method (see modification in method declaration
echo "The BMW has " . $bmw->wheel . " wheels";

/*
// Check if class is properly created
if (class_exists("Car")) {
    echo "Class successfully created";
} else {
    echo "Failed to create class";
}*/

/*
// Check if method exists
if (method_exists("Car", "MoveWheels")) {
    echo "The method exists";
} else {
    echo "Method does not exist";
}*/

