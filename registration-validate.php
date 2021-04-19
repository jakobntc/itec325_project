<?php

require_once("database-connection.php");

/*
 * checkUsername : String  ->  bool
 *
 * $un - The username to check the database for.
 *
 * Determines if the given '$un' occures in the database.
 */
function checkUsername($un): bool {

    $con = connectToDatabase();


    $query = "SELECT * FROM Users
              WHERE User_Name = '$un'";

    $allRows = mysqli_query($con, $query);
    if (!$allRows) echo "Query failed -- lost connection?";

    $topRow = mysqli_fetch_array($allRows);
    if (!$topRow) {
        echo "The username $un didnt occure in the database.\n";
        return false;
    } else {
        echo "The username $un DID occure in the database.\n";
        return true;
    }
    mysqli_close($con);
}

/*
 * checkEmail : String  ->  bool
 *
 * $email - The email to check the database for.
 *
 * Determines if the given '$email' occures in the database.
 */
function checkEmail($email): bool {

    $con = connectToDatabase();

    $query = "SELECT * FROM Users
              WHERE Email = '$email'";

    $allRows = mysqli_query($con, $query);
    if (!$allRows) echo "Query failed -- lost connection?";

    $topRow = mysqli_fetch_array($allRows);
    if (!$topRow) {
        echo "The username $un didnt occure in the database.\n";
        return false;
    } else {
        echo "The username $un DID occure in the database.\n";
        return true;
    }
    mysqli_close($con);
}

?>
