<?php

    // Connect to database
    $connection = mysqli_connect('localhost', 'root', '', 'testLoginApp');

    // Test database connection
    if ($connection) {
        echo "STATUS: You are connected to the database";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
    } else {
        die("STATUS: Database connection failed");
    }

    // Read data from database
    $query = "SELECT * FROM users";
    $result = mysqli_query($connection, $query);

    // Check on the query
    if (!$result) {
        die("Query FAILED" . mysqli_error());
    }

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
<h1 class="text-center">Read</h1>
    <div class="col-sm-6">

        // Display data. This code displays data organized and grouped by user
        <?php
            while ($row = mysqli_fetch_assoc($result)) {
        ?>

        <pre>
            <?php
                print_r($row);
            ?>
        </pre>

        <?php
        }
        ?>

    </div>

</div>
</body>
</html>

