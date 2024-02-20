<?php global $connection, $result;?>
<?php include "database.php";?>
<?php include "functions.php";?>

<!--// Use include function to use a file from different source. In this case, we use database.php to connect to db making code clearer and modular.-->

<?php deleteRows();?>


<?php include "Includes/header.php"?>

<div class="container">
    <h1 class="text-center">Delete</h1>
    <div class="col-sm-6">

        <form action="loginDelete.php" method="post">
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
            <input class="btn btn-primary" type="submit" name="submit" value="DELETE">
        </form>


    </div>

<?php include "Includes/footer.php";?>

