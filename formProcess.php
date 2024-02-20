<?php

if (isset($_POST['submit'])) { // This part means> if the post was submitted, what do I want to do?

    $minimum = 5;
    $maximum = 15;

    $name = ["Edwin", "Julio", "Nina", "Nelly", "David"];
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check if username is at least 5 characters
    if (strlen($username) < $minimum) {
        echo "Username has to be longer than five characters";
    }

    // Check if username is less than 15 characters
    if (strlen($username) > $maximum) {
        echo "Username cannot be longen than fifteen";
    }

    if (in_array($username, $name)) {
        echo "Welcome " . $username;
    } else {
        echo "You do not have an account";
    }

//    echo "Hello " . $username . "<br>";
//    echo "Your password is " . $password;

}

?>
