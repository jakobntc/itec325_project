<?php

function connectToDatabase() {
    $host = "itec-php01";
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
