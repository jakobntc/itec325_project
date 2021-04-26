<?php
    require_once("utils/utils.php");
    require_once("utils/constants.php");
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
                        <li class="nav-item active">
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
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li class=nav-item">
                            <form method="get" action="login.php">
                                <button class="btn btn-primary" type="submit">Login</button>
                            </form>
                        </li>
                        <li class=nav-item">
                            <form method="get" action="registration.php">
                                <button class="btn btn-primary" type="submit">Sign Up</button>
                            </form>
                        </li>  
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <img id="profileIMG" src="photos/profile.jpg" alt="Profile Picture">
                <h3 id="nameTxt">Name</h3>
            </div>

            <ul class="list-unstyled components">
                <li>
                    <a href="#" style="pointer-events: none; background-color: #0061b5">Account</a>
                </li>
                <li>
                    <a href="currentReservations.php">Current Reservations</a>
                </li>
                <li>
                    <a href="pastReservations.php">Past Reservations</a>
                </li>
            </ul>
        </nav>

        <!-- Page Content  -->
        <div id="content">

            <div class="container-fluid" style="padding-left: 250px">
                <div class="row">
                    <h1 style="padding-bottom: 20px">Account Settings</h1>
                </div>
                <!-- Email info -->
                <div class="row">
                    <div class="col">
                        <div class="row">
                            <div class="col">
                                <h5>Email</h5>
                                <p>email@email.com</p>
                            </div>
                            <div class="col">
                                <p>Edit</p>
                            </div>
                        </div>
                        <hr style="margin-right: 375px">
                    </div>
                </div>
                <!-- Gender info -->
                <div class="row">
                    <div class="col">
                        <div class="row">
                            <div class="col">
                                <h5>Gender</h5>
                                <p>Male</p>
                            </div>
                            <div class="col">
                                <p>Edit</p>
                            </div>
                        </div>
                        <hr style="margin-right: 375px">
                    </div>
                </div>
                <!-- DOB info -->
                <div class="row">
                    <div class="col">
                        <div class="row">
                            <div class="col">
                                <h5>Date of Birth</h5>
                                <p>12/27/1997</p>
                            </div>
                            <div class="col">
                                <p>Edit</p>
                            </div>
                        </div>
                        <hr style="margin-right: 375px">
                    </div>
                </div>
                <!-- Address info -->
                <div class="row">
                    <div class="col">
                        <div class="row">
                            <div class="col">
                                <h5>Address</h5>
                                <p>123 Street st City State</p>
                            </div>
                            <div class="col">
                                <p>Edit</p>
                            </div>
                        </div>
                        <hr style="margin-right: 375px">
                    </div>
                </div>
                <!-- Phone info -->
                <div class="row">
                    <div class="col">
                        <div class="row">
                            <div class="col">
                                <h5>Phone</h5>
                                <p>555-555-5555</p>
                            </div>
                            <div class="col">
                                <p>Edit</p>
                            </div>
                        </div>
                        <hr style="margin-right: 375px">
                    </div>
                </div>

            <button type="button" id="changePassBtn">
                <span>Change Password</span>
            </button>

        </div>
    </div>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <!-- jQuery Custom Scroller CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $("#sidebar").mCustomScrollbar({
                theme: "minimal"
            });

            $('#sidebarCollapse').on('click', function () {
                $('#sidebar, #content').toggleClass('active');
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });
        });
    </script>

</body>

</html>