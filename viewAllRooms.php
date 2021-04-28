<?php
session_start();

if ( (time() - $_SESSION["verificaitonTime"]) >= 800) {
    session_unset();
    session_destroy();
    setcookie( session_name(), "", 1, "/");
} else {
    $_SESSION["lastVerified"] = time() - $_SESSION["verificaitonTime"];
}

require_once("utils/utils.php");
require_once("utils/constants.php");
require_once("database-connection.php");
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Account</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="styles/account_style.css">
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
</head>

<body style="background-color: #f5f5f5">

<header>
    <nav class='navbar navbar-expand-md navbar-dark fixed-top bg-dark'>
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Team Alpha Website</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="homepage.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Repair Tickets</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="postARoom.php">Post a Room</a>
                    </li>
                    <li class="nav-item">
                        <form method="get" action="#">
                            <input type="text" id="searchText" name="searchText" placeholder="Search...">
                            </input>
                            <button class="btn btn-primary" type="submit">Search</button>
                        </form>
                    </li>
                    <?php
                    if (array_key_exists("firstName", $_SESSION)) {
                        echo "<li class='nav-item'><p class='m-2 text-white'>Logged in as: "
                           , $_SESSION["firstName"]
                           , "!</p></li>";
                    }
                    ?>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <?php
                    if (isset($_SESSION["verificaitonTime"])) {
                        echo  "<li class='nav-item'>"
                        , "<form method='get' action='logout-handler.php'>"
                        , "<button class='btn btn-primary' type='submit'>Logout</button>"
                        , "</form>"
                        , "</li>";
                    } else {
                        echo "<li class='nav-item'>"
                           , "<form method='get' action='login.php''>"
                           , "<button class='btn btn-primary' type='submit'>Login</button>"
                           , "</form>"
                           , "</li>"
                           , "<li class=nav-item'>"
                           , "<form method='get' action='registration.php'>"
                           , "<button class='btn btn-primary' type='submit'>Sign Up</button>"
                           , "</form>"
                           , "</li>";
                    }

                    ?>
                </ul>
            </div>
        </div>
    </nav>
</header>

    <h3 style="margin-top: 50px">Available Rooms</h3>
    
    <?php

    $con = connectToDatabase();
    $query = "SELECT * FROM Rooms";

    $allRows = mysqli_query($con, $query);
    if (!$allRows) {
        echo "SOMETHING WENT WRONG.";
    } else {
        while ($oneRow = mysqli_fetch_assoc($allRows)) {
        $roomID = $oneRow["Room_ID"];
        echo '<div class="card" style="width: 300px; display: table-cell; margin-left: 10px;">'
        , "<img class='card-img-top' src='photos/chicagoHouse.jpg' alt='Photo of the room'/>"
        , "<div class='card-body'>"
        , "<h5 class='card-title'>"
        , $oneRow["Title"]
        , "</h5>"
            , "<p class='card-text'>"
        , $oneRow["Description"]
            , "</p>"
        , "<form method='get' action='viewARoom.php' id='viewRoom$roomID'>"
        , "<input type='hidden' value='$roomID' name='roomID'/>"
        , "<button class='btn btn-primary' onclick='document.getElementById(" . '"viewRoom' . $roomID . '").submit();' . "'>"
        , "View Details &raquo;"
        , "</button>"
        , "</form>"
        , "</div>"
        , "</div>"
        , "<br />";
        }
    }

    ?>
    </div>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <!-- jQuery Custom Scroller CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>


</body>

</html>
