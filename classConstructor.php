<?php

// Syntax of a class: class className { }

// Create a class
class Car {

    // Keyword "var" allows us to create properties that we can use within our class
    var $wheel = 4;
    var $hood = 1;
    var $engine = 1;
    var $doors = 4;

    /*Constructs execute everytime we create a new instance. It is useful to execute default values or tasks that we want automatically done or checked*/
    function __construct() {
        echo $this->wheel = 10;
    }
}

// Create a new instance of a class by instantiating. Also called and object
$bmw = new Car();


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

