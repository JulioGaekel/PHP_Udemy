<?php global $connection, $result;
include "database.php";
include "functions.php";

// Use include function to use a file from different source. In this case, we use database.php to connect to db making code clearer and modular.
?>

<?php

updateTable();

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
<h1 class="text-center">Update</h1>
    <div class="col-sm-6">


        <form action="loginUpdate.php" method="post">
            <br>
            <div class="form-group">
                <select name="id" id="">

                    <?php
                        showAllData();
                    ?>

                </select>
            </div>

            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" class="form-control">
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control">
            </div>
            <br>
            <input class="btn btn-primary" type="submit" name="submit" value="UPDATE">
        </form>


    </div>

</div>
</body>
</html>

