<?php include "database.php";

function showAllData() {
    /*Create a while-loop to pull all the information out. It is necessary to have a query (SQL command) in order to do so, if not, pulling wont work*/

    global $connection; /*This needs to be declared. Remember everything inside a function is in a local scope. If we want to use variables from other places and put it in the function, is to declare it as global*/

    // Query to read data from database
    $query = "SELECT * FROM users";
    $result = mysqli_query($connection, $query);

    // Check on the query
    if (!$result) {
        die("Query FAILED" . mysqli_error());
    }

    /*Using $result because of the query above*/
    while ($row = mysqli_fetch_assoc($result)) {
        /*This will return an associative array. Now we save the values from the key 'id' in a
        variable*/
        $id = $row['id'];

        echo "<option value='$id' id=''>$id</option>";

    }
}

function updateTable() {

    if (isset($_POST['submit'])) {
        global $connection;
//        global $result; /*If $result is not used within the function after initialization, declare it global to use
// outside. If not, table will not update*/

        $id = $_POST['id'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        $query = "UPDATE users SET ";
        $query .= "username = '$username', ";
        $query .= "password = '$password' ";
        $query .= "WHERE id = $id ";

        $result = mysqli_query($connection, $query);

        if (!$result) {
            die("ERROR, table not updated!" . mysqli_error($connection));
        }

    }

}

function deleteRows() {

    if (isset($_POST['submit'])) {
        global $connection;
//        global $result; /*If $result is not used within the function after initialization, declare it global to use
// outside. If not, table will not update*/

        $id = $_POST['id'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        $query = "DELETE FROM users ";
        $query .= "WHERE id = $id ";

        $result = mysqli_query($connection, $query);

        if (!$result) {
            die("ERROR, table not updated!" . mysqli_error($connection));
        }

    }

}
?>
