<?php

function connectToDatabase() {
    $host = "localhost";
    $username = "325proj2";
    $password = "325proj2!";
    $dbname = "325proj2";

    $con = mysqli_connect($host, $username, $password, $dbname);

    if (!$con) {
        echo "Database connection failed.\n";
    } else {
        return $con;
    }
}

?>
