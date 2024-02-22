<?php

// Syntax of a class: class className { }

// Create a class
class Car {

    // Keyword "var" allows us to create properties that we can use within our class
     public $wheel = 4; // Public means data is available to entire program
     protected $hood = 1; // Protected means data is only available to this class or any subclasses (extends)
     private $engine = 1; // Private means data will only be accessible to this class, even if extended.
    var $doors = 4;

    function showProperties() {
        echo $this->hood; // Using the protected property inside the class to create a method is allowed. In this
        // case, it allows us to echo the value. If we tried to echo it from outside directly (echo $bmw->hood;) it
        // will show an error.
    }
}

// Create a new instance of a class by instantiating. Also called and object
$bmw = new Car();
//echo $bmw->wheel;
$bmw->showProperties();

$semi = new Semi();
$semi->showProtectedProperty();

class Semi extends Car {
    function showProtectedProperty() { // Since it extends from protected property class, it can use it.
        echo $this->hood;
    }

    function testPrivateProperty() {
        echo $this->engine; // Value is not displayed (or error in some cases)
    }
}

