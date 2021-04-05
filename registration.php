<?php 
require_once("utils/utils.php"); 
require_once("utils/constants.php"); 
?>

<!DOCTYPE html>

<html>

<head>
    <title>Our website registration</title>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel='stylesheet' href='styles/reg_style.css'>
</head>

<body>

<!-- Navbar for the page. -->
<header>
    <nav class='navbar navbar-expand-md navbar-dark fixed-top bg-dark'>
        <div class="container-fluid">
            <a class="navbar-brand" href="homepage.php">Team Alpha Website</a>
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
                        <a class="nav-link" href="#">Post a Room</a>
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
                        <form method="get" action="#">
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

<div class="container-fluid">
    <!-- row containing the jumbotron -->
    <div class="row">
        <div class="col-sm">
            <div class="jumbotron jumbotron-fluid">
                <div class="container">
                    <h1 id="formJumbo" class="display-4">Team Alpha Website User Registration.</h1>
                    <p id="formJumbo" class="lead">Please enter in all of the information below as accurately as you can.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- row containing the entire form -->
    <div class="row">
        <div class="col">
            <form method="post" id="registrationForm">

                <!-- First row in the form. -->
                <div class="form-group row justify-content-center">
                    <div class="col-sm-3 align-self-center">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Cannot contain spaces or symbols."   required minlength="10" maxlength="25" pattern="[a-zA-Z0-9]+">
                    </div>
                </div> <!-- /First row in the form. -->

                <!-- Second row in the form -->
                <div class="form-group row justify-content-center">
                    <div class="col-sm-3">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Must contain at lease one number and one symbol." required minlength="10" maxlength="25" pattern="(?=.*[0-9])(?=.*[a-zA-Z])([a-zA-Z0-9]+)">
                    </div>
                </div>
                <div class="form-group row justify-content-center">
                    <div class="col-sm-3">
                        <label for="passwordConfirmation">Confirm Password</label>
                        <input type="password" class="form-control" id="passwordConfirmation" name="passwordConfirmation" required minlength="10" maxlength="25" pattern="(?=.*[0-9])(?=.*[a-zA-Z])([a-zA-Z0-9]+)">
                    </div>
                </div> <!-- /Second row in the form -->
                
                <!-- third row in the form. -->
                <div class="form-group row justify-content-center">
                    <div class="col-sm-3">
                        <label for="firstName">First name</label>
                        <input type="text" class="form-control" id="firstName" name="firtName" placeholder="Joe" required pattern="[a-zA-Z]+">
                    </div>
                </div> <!-- /third row in the form. -->

                <!-- Fourth row in the form. -->
                <div class="form-group row justify-content-center">
                    <div class="col-sm-3">
                        <label for="lastName">Last name</label>
                        <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Shmo" required pattern="[a-zA-Z]+">
                    </div>
                </div> <!-- /Fourth row in the form. -->

                <!-- Fifth row in the form. -->
                <div class="form-group row justify-content-center">
                    <div class="col-sm-3">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="joe.shmo@example.com" required>
                    </div>
                </div> <!-- /Fifth row in the form. -->

                <!-- Sixthrow in the form. -->
                <div class="form-group row justify-content-center">
                    <div class="col-sm-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="validCheck" name="validCheck" value="acceptedFate" required>
                            <label class="form-check-label" for="validCheck">
                                Agree to the <a href="#">terms</a> and <a href="#">conditions</a>
                            </label>
                         </div>
                    </div>
                </div> <!-- /Sixth row in the form. -->

                <!-- Seventh row in the form. -->
                <div class="form-group row justify-content-center">
                    <div class="col-sm-1">
                        <input class="btn btn-primary" type="submit"></button>
                    </div>
                </div> <!-- /Seventh row in the form. -->
            </form>
        </div> <!-- /column containing the form. -->
    </div> <!-- /row containing the entire form -->

    <div class="row">
        <div class="col-sm">
            <hr class="featurette-divider" id="footerDivider" style="width: 100%;">
            <p class="float-right"><a href="#">Back to top</a></p>
            <p>&copy; 2021-2022, inc. &middot; <a href="#">Privacy</a> &middot; <a              href="#">Terms</a></p>
        </div>
    </div>
</div>


</body>

</html>
