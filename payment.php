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

    <title>Payment</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="styles/paymentStyle.css">
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
                </ul>
            </div>
        </div>
    </nav>
</header>

    <div class="container-fluid" style="width: 100%; height: 100%; padding-top: 20px; margin-top: 50px">
        <!-- Row 1 -->
        <div class="row">
            <div class="col-sm-6 align-self-start" >
                <h1>Reserving a Room for ...</h1>
                <img src="photos/miamiHouse.jpg" class="d-block w-100" height=400 style="object-fit: cover">
                <p style="padding-left: 20px">
                    Address: ... <br>
                    When: ... <br>
                    How many guests: ... <br>
                </p>
            </div>
            <div class="col-sm-6">
                <div class="card" style="padding-left: 20px; padding-top: 10px; padding-bottom: 10px    ">
                    <h3 style="align-self: center;">Payment Info</h3>
                    <label for="name">Name on Card</label>
                    <input type="text" id="name" name="name" style="width: 50%">
                    <label for="cardNumber">Card Number</label>
                    <input type="number" id="cardNumber" name="cardNumber" style="width: 50%">
                    <div>
                        <label for="expDate">Exp Date</label>
                        <View style="padding-left: 31%"></View>
                        <label for="cvc">CVC</label><br>
                        <input type="month" id="expDate" name="expDate" style="width: 40%">
                        <input type="number" id="cvc" name="cvc" style="width: 15%">
                    </div>
                    
                    <label for="billingAddress">Billing Address</label>
                    <input type="text" id="billingAddress" name="billingAddress"style="width: 75%">
                    <label for="country">Country</label>
                    <input type="text" id="country" name="country" style="width: 50%">
                    <label for="zip">Zipcode</label>
                    <input type="number" id="zip" name="zip" style="width: 25%">
                    <button type="button" class="btn btn-primary" style="align-self: center">Reserve</button>
                </div>
            </div>
            <!-- <div class="col-sm-6">
                <div class="card" style="width: 300px; height: 300px;">

                </div>
            </div> -->
        </div>
    </div>
</body>

</html>