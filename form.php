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

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form action="form.php" method="post">
    <input type="text" name="username" placeholder="Enter username">
    <input type="password" name="password" placeholder="Enter password">
    <br>
    <input type="submit" name="submit">
</form>

</body>
</html>
