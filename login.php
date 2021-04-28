<?php
    require_once("utils/utils.php");
?>


<!DOCTYPE html>

<html>

<head>
    <title>Our website login</title>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel='stylesheet' href='styles/login_style.css'>
</head>

<body>

<!-- Navbar for the page. -->
<header>
    <nav class='navbar navbar-expand-md navbar-dark fixed-top bg-dark'>
        <div class="container-fluid">
            <a class="navbar-brand" href="homepage.php">Team Alpha Website</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-                       controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
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
                        <form method="get" action="registration.php">
                            <button class="btn btn-primary" type="submit">Sign Up</button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<main class="form-signin">
    <div class="shadow-lg border rounded rounded-3" style="height: 400px; padding: 10px;">
        <form style="margin: 5px;" name="loginForm" method="post" action="login-handler.php">
            <img class="mb-4" src="photos/logo.webp" alt="" width="57" height="57">
            <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

            <div class="form-floating" style="margin: 3px;">
                <input type="text" class="form-control" name="username" id="username" placeholder="Username" required>
            </div>
            <div class="form-floating" style="margin: 3px;">
                <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
            <p class="mt-5 mb-3 text-muted"><a href="#">Terms</a> & <a href="#">conditions</a></p>
        </form>
    </div>
</main>

</body>

<!--
    <footer class="container">
        <p class="float-right"><a href="#">Back to top</a></p>
        <p>&copy; 2017-2019, inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
    </footer>
-->

</html>
