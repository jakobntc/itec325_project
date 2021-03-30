<?php 
require_once("utils/utils.php"); 
require_once("utils/constants.php"); 
?>

<!DOCTYPE html>

<html>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel='stylesheet' href='styles/reg_style.css'>
</head>

<body>

<!-- The navbar for the page -->
<header>
    <nav class='navbar navbar-expand-md navbar-dark fixed-top bg-dark'>
        <div class='container-fluid'>
            <a class='navbar-brand' href='#'>Team Alpha Website</a>
            <button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs- target='#navbarCollapse' aria-controls='navbarCollapse' aria-expanded='false' aria-         label='Toggle navigation'>
                <span class='navbar-toggler-icon'></span>
            </button>
            <div class='collapse navbar-collapse' id='navbarCollapse'>
                <ul class='nav navbar-nav navbar-left'>
                    <li class='nav-item active'>
                        <a class='nav-link' href='#'>Home</a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link' href='#'>Repair Tickets</a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link' href='#'>Post a Room</a>
                    </li>
                    <li>
                        <form class='d-flex' action="#" method="get">
                            <input class='form-control me-2' type='search'                  placeholder='Search'/>
                            <button class='btn btn-primary' type='submit'>Search</button>
                        </form>
                    </li>
                    <li style="text-allign: right;">
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <button class="btn btn-primary me-md-2" type="button">Login</   button>
                            <button class="btn btn-primary me-md-2" type="button">Sign up</ button>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 id="formJumbo" class="display-4">Team Alpha Website User Registration.</h1>
        <p id="formJumbo" class="lead">Please enter in all of the information below as accurately as you can.</p>
    </div>
</div>

<form method="post" id="registrationForm">

    <!-- First row in the form. -->
    <div class="form-row">
        <div class="form-group col-sm">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" name="username" placeholder="Cannot contain spaces but can contain '-' or '.'" required>
        </div>
        <div class="form-group col-sm">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Must contain at lease one number and one special character." required>
        </div>
        <div class="form-group col-sm">
            <label for="passwordConfirmation">Confirm Password</label>
            <input type="password" class="form-control" id="passwordConfirmation" name="passwordConfirmation" required>
        </div>
    </div>

    <!-- Second row in the form. -->
    <div class="form-row">
        <div class="form-group col-sm">
            <label for="firstName">First name</label>
            <input type="text" class="form-control" id="firstName" name="firtName" placeholder="Joe" required>
        </div>
        <div class="form-group col-sm">
            <label for="lastName">Last name</label>
            <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Shmo" required>
        </div>
    </div>

    <!-- Third row in the form. -->
    <div class="form-row">
        <div class="form-group col">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="joe.shmo@example.com" required>
        </div>
    </div>

    <!-- Fourth row in the form. -->
    <div class="form-row">
        <div class="form-group col-sm">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="validCheck" name="validCheck" value="acceptedFate" required>
                <label class="form-check-label" for="validCheck">
                    Agree to the <a href="#">terms</a> and <a href="#">conditions</a>
                </label>
            </div>
        </div>
        <div class="form-group col-sm">
            <input class="btn btn-primary" type="submit"></button>
        </div>
    </div>
</form>

<!-- The footer of the page. -->
<footer class="container-fluid">
    <hr class="featurette-divider" id="footerDivider" style="width: 100%;">
    <p class="float-right"><a href="#">Back to top</a></p>
    <p>&copy; 2021-2022, inc. &middot; <a href="#">Privacy</a> &middot; <a              href="#">Terms</a></p>
</footer>

</body>

</html>
