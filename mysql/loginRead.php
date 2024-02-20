<?php global $connection;?>
<?php include "database.php";?>
<?php include "functions.php";?>

<?php include "Includes/header.php";?>

<div class="container">
<h1 class="text-center">Read</h1>
    <div class="col-sm-6">

        <!--Display data. This code displays data organized and grouped by user-->
        <pre>
            <?php readRows();?>
        </pre>

    </div>

    <?php include "Includes/footer.php" ?>