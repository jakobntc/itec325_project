<?php

$host = "localhost";
$username = "jclapsaddle";
$password = "mysqlpassword123";
$dbname = "jclapsaddle";

$con = mysqli_connect($host, $username, $password, $dbname);

if (!$con) {
    echo "Database connection failed.";
} else {
    echo "Database connection succeeded.";
}

?>
