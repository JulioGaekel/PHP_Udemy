<?php global $connection;?>
<?php include "database.php";?>
<?php include "functions.php";?>


<?php createRows();?>

<?php include "Includes/header.php";?>

<div class="container">
<h1 class="text-center">Create</h1>
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
            <br>
            <input class="btn btn-primary" type="submit" name="submit" value="Create">
        </form>
    </div>

<?php include "Includes/footer.php";?>

