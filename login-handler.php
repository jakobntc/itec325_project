https://itec-php01.radford.edu/jclapsaddle/itec325/project/               itec325_project/homepage.php<?php

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
    //php_ini('session.cookie_secure',true);
    session_start();
    echo $oneRow["F_Name"];
    $_SESSION["firstName"] = $oneRow["F_Name"];
    $_SESSION["verificaitonTime"] = time();
}

mysqli_close($con);
header("Location: https://itec-php01.radford.edu/jclapsaddle/itec325/project/itec325_project/homepage.php");

?>
