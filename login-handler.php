<?php

require_once("database-connection.php");

$con = connectToDatabase();

$username = mysqli_real_escape_string($con, $_POST["username"]);
$password = hash("sha256", mysqli_real_escape_string($con, $_POST["password"]));

$query = "SELECT * FROM Users
          WHERE User_Name = '$username'
          AND Password = '$password'";
$allRows = mysqli_query($con, $query);
if (!$allRows) echo "Query failed -- connection lost\n?";

$oneRow = mysqli_fetch_array($allRows);

// The return table didn't contain any rows
if (!$oneRow) {
    echo "Invalid username or password.\n";
} else {
    echo "Valid username & password provided.\n";
}

mysqli_close($con);

?>
