<?php

require_once("database-connection.php");

$con = connectToDatabase();

if (!$con) {
    echo "Conneciton failed.\n";
} else {
    echo "Connection successful\n";
}

echo "Initializing the variables.\n";
$username = $_POST["username"];
$password = hash("sha256", $_POST["password"]);
$confirmPassword = $_POST["passwordConfirmation"];
$firstName = $_POST["firstName"];
$lastName = $_POST["lastName"];
$email = $_POST["email"];

// Checking if the username occures in the database.
//
$checkUsername = "SELECT * FROM Users
                  WHERE User_Name = '$username'";
$allRows = mysqli_query($con, $checkUsername);
if (!$allRows) echo "Query failed : Lost connection?";

$topRow = mysqli_fetch_array($allRows);

// If the username DOESN'T occure in the database.
//
if (!$topRow) {
    $insert = "INSERT INTO Users( User_Name
                                , Password
                                , F_Name
                                , L_Name
                                , Email
                                )
               VALUES ( '$username'
                      , '$password'
                      , '$firstName'
                      , '$lastName'
                      , '$email'
                      )";

    $result = mysqli_query($con, $insert);
    if (!$result) {
        echo "Insert failed.\n";
    } else {
        echo "Insert Succedded.\n";
    }
    }
// If the username DOES occure in the database
//
else {
    echo "Username already exists.\n";
}

/*
// Printing out all of the users in the Users table.
//
$query = "SELECT * FROM Users";
$result = mysqli_query($con, $query);

if (!$result) {
    echo "Query failed somehow";
} else {
    while ($oneRow = mysqli_fetch_assoc($result)) {
        echo "\nUser_ID: "
            , $oneRow["User_ID"]
            , "\nUser_Name: "
            , $oneRow["User_Name"]
            , "\nHashed_Password: : "
            , $oneRow["Password"]
            , "\nFirst_Name: "
            , $oneRow["F_Name"]
            , "\nLast_Name: "
            , $oneRow["L_Name"]
            , "\nEmail: "
            , $oneRow["Email"]
            , "\n";
    }
}
 */

mysqli_close($con);
echo "Connection closed";
?>
