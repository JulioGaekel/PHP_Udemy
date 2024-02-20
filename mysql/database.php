<?php
// Connect to database
$connection = mysqli_connect('localhost', 'root', '', 'testLoginApp');

// Test database connection. If not connected to the database, error message will appear on screen
if (!$connection) {
    die("STATUS: Database connection failed");
}


?>