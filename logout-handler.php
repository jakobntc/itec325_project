<?php

session_start();
session_destroy();
setcookie( session_name(), "", 1, "/");

header("Location: https://itec-php01.radford.edu/jclapsaddle/itec325/project/itec325_project/homepage.php");

?>
