<!DOCTYPE html>

<html lang="en">

 <head>
     <title>Our website homepage</title>
     <meta charset='utf-8'>
     <meta name='viewport' content='width=device-width, initial-scale=1'>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
     <link rel='stylesheet' href='styles/style.css'>
 </head>

<body>

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

<div id="bodyContainer" class="container-fluid">

    <!-- Row 1 -->
    <div class="row">
        <div class="col-sm">
            <h1 style="text-align: center;">Title of the room</h1>
        </div>
    </div>
    
    <!-- Row 2 -->
    <div class="row justify-content-start">
        
        <!-- Location Column -->
        <div class="col-sm-3 align-self-start">
            <div class="card text-center">
                <h5 class="card-header">Location</h5>
                <div class="card-body">
                    <h5 class="card-title">Roanoke</h5>
                    <p class="card-text">This is just an exampe of somewhere that the location might be.</p>
                    <form method="get" action="#">
                        <button class="btn btn-primary" type="submit">Reserve Now</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- /Location Column -->

        <!-- Carousel Column-->
        <div class="col-md-6">
            <div id="roomPhotos" class="carousel slide" data-bs-ride="carousel">

                <!-- Items in the carousel. -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="photos/fakeBedRoomPicture.png" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                        <img src="photos/fakeBedRoomPicture_2.png" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                        <img src="photos/fakeBedRoomPicture_3.png" class="d-block w-100">
                    </div>
                </div>

                <!-- Buttons for the controls. -->
                <a class="carousel-control-prev" role="button" href="#roomPhotos" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </a>
                <a class="carousel-control-next" role="button" href="#roomPhotos" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </a>
            </div> 
        </div>
        <!-- /Carousel Column -->

        <!-- User profile card column-->
        <div class="col-sm align-self-start">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="#" alt="Photo of Rentor">
                <div class="card-body">
                    <h5 class="card-title">Account name</h5>
                    <p class="card-text">This is going to be the person description on their account or something.</p>
                    <a href="#" class="btn btn-primary">View Profile</a>
                </div>
            </div>
        </div>
        <!-- /User profile card column-->

    </div> <!-- /Row 2 -->

    <!-- Row 3 -->
    <div class="row justify-content-center">

        <!-- description Colum -->
        <div class="col-sm-6">
            <h3 style="text-align: center;">description</h3>
            <p class="border" style="text-align: center;">The description of the room will go here.</p>
        </div>
        <!-- /description Colum -->

    </div>
    <!-- /Row 3 -->

</div> <!-- /Container -->

<!-- Footer for the page. -->
<footer class="container">
    <p class="float-right"><a href="#">Back to top</a></p>
    <p>&copy; 2017-2019, inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
</footer>

</body>

</html>
