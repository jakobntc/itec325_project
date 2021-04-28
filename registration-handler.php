<?php

session_start();

require_once("database-connection.php");
require_once("registration-validate.php");

$con = connectToDatabase();

if (!$con) {
    echo "Conneciton failed.</br>";
} else {
}

$username = mysqli_real_escape_string($con, $_POST["username"]);
$password = hash("sha256", $_POST["password"]);
$confirmPassword = $_POST["passwordConfirmation"];
$firstName = $_POST["firstName"];
$lastName = $_POST["lastName"];
$email = $_POST["email"];

$usernameConflict = checkUsername($username);
$emailConflict = checkEmail($email);

if (!$usernameConflict && !$emailConflict) {
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
        echo "Insert failed.</br>";
    } else {
	$_SESSION["verificaitonTime"] = time();
	$_SESSION["firstName"] = $firstName;
    }
} else {
    if ($usernameConflict) header("Location: registration.php?error=username&firstName=$firstName&lastName=$lastName&email=$email");
    if ($emailConflict) header("Location: registration.php?error=email&username=$username&firstName=$firstName&lastName=$lastName");
}

// Printing out all of the users in the Users table.
//
$query = "SELECT * FROM Users";
$result = mysqli_query($con, $query);

if (!$result) {
    echo "Query failed somehow";
} else {
    while ($oneRow = mysqli_fetch_assoc($result)) {
        echo "</br>User_ID: "
            , $oneRow["User_ID"]
            , "</br>User_Name: "
            , $oneRow["User_Name"]
            , "</br>Hashed_Password: : "
            , $oneRow["Password"]
            , "</br>First_Name: "
            , $oneRow["F_Name"]
            , "</br>Last_Name: "
            , $oneRow["L_Name"]
            , "</br>Email: "
            , $oneRow["Email"]
            , "</br>";
    }
}


mysqli_close($con);
header("Location: homepage.php")
?>
