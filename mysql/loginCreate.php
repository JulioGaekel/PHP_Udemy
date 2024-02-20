<?php include "database.php";
// Pick up the data
if (isset($_POST['submit'])) { // If submitted

    // Store incoming data in variables
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Insert data into database
    $query = "INSERT INTO users(username, password) VALUES ('$username', '$password')";
    $result = mysqli_query($connection, $query);

    // Check on the query
    if (!$result) {
        die("Query FAILED" . mysqli_error());
    }


/*    // Check if username and password are entered.
    if ($username && $password) {
        echo $username;
        echo $password;
    } else {
        echo "This cannot be blank";
    }*/

}

/* This code block has been copied to the database.php
    // Connect to database
    $connection = mysqli_connect('localhost', 'root', '', 'testLoginApp');

    // Test database connection
    if ($connection) {
        echo "You are connected to the database";
    } else {
        die("Database connection failed");
    }*/
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">

    <div class="col-sm-6">
        <form action="loginCreate.php" method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" class="form-control">
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control">
            </div>

            <input class="btn btn-primary" type="submit" name="submit" value="Submit">
        </form>
    </div>

</div>
</body>
</html>

