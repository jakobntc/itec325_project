<?php
require_once("utils/utils.php");
require_once("utils/constants.php");
?>

<!doctype html>
<html lang='en'>
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
        <div class='container-fluid'>
            <a class='navbar-brand' href='#'>Team Alpha Website</a>
            <button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navbarCollapse' aria-controls='navbarCollapse' aria-expanded='false' aria-label='Toggle navigation'>
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
                            <input class='form-control me-2' type='search' placeholder='Search'/>
                            <button class='btn btn-primary' type='submit'>Search</button>
                        </form>
                    </li>
                    <li style="text-allign: right;">
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <button class="btn btn-primary me-md-2" type="button">Login</button>
                            <form method="get" action="registration.php">
                                <button class="btn btn-primary me-md-2" type="submit">Sign up</button>
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

    <!-- The carousel containing the pictures -->
    <div id='carousel' class='carousel slide carousel-fade' data-ride='carousel' style:'height:50vh'>
        <!--  Indicators  -->
        <ol class='carousel-indicators'>
            <li data-target='#carousel' data-slide-to='0' class='active'></li>
            <li data-target='#carousel' data-slide-to='1'></li>
            <li data-target='#carousel' data-slide-to='2'></li>
        </ol>
        <!--  Indicators  -->

        <!--  slides  -->
        <div class='carousel-inner' role='listbox'>
            <div class='carousel-item active'>
                <div class='view'>
                   <img src='https://images.pexels.com/photos/262048/pexels-photo-262048.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260' alt='Fake Photo' alt='First slide' width="100%" height="100%">
                    <div class='mask rgba-black-light'></div>
                </div>
                <div class='container'>
                    <div class='carousel-caption'>
                        <h3 class='h3-responsive'>Book your stay today!</h3>
                        <p>This room could be where you stay on your next trip!</p>
                        <p><a class='btn btn-lg btn-primary' href='#'>Book now!</a></p>
                    </div>
                </div>
            </div> <!-- /carousel item one -->
            <div class='carousel-item'>
                <div class='view'>
                    <img src='https://images.unsplash.com/photo-1483490109305-acf13776a5fa?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=2252&q=80' alt='Fake Photo' alt='Second slide'>
                    <div class='mask rgba-black-light'></div>
                </div>
                <div class='container'>
                    <div class='carousel-caption'>
                        <h3 class='h3-responsive'>Book your stay today!</h3>
                        <p>This room could be where you stay on your next trip!</p>
                        <p><a class='btn btn-lg btn-primary' href='#'>Book now!</a></p>
                    </div>
                </div>
            </div> <!-- /carousel item two -->
            <div class='carousel-item'>
            <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>
                <div class='container'>
                    <div class='carousel-caption'>
                        <h1>Book your stay today!</h1>
                        <p>This room could be where you stay on your next trip!</p>
                        <p><a class='btn btn-lg btn-primary' href='#'>Book now!</a></p>
                    </div>
                </div>
            </div> <!-- /carousel item three -->
        </div>
        <!--  /slides  -->
        <!-- controls -->
        <a class='carousel-control-prev' href='#carousel' role='button' data-slide='prev'>
            <span class='carousel-control-prev-icon' aria-hidden='true'></span>
            <span class='sr-only'>Previous</span>
        </a>
        <a class='carousel-control-next' href='#carousel' role='button' data-slide='next'>
            <span class='carousel-control-next-icon' aria-hidden='true'></span>
            <span class='sr-only'>Next</span>
        </a>
        <!-- /controls -->
    </div> <!-- /carousel -->

    <!-- 1 row with three columns of text -->
    <div class='container marketing'>
        <div class='row'>
            <div class='col-lg-4'>
                <img class='rounded-circle' src='photos/fakeBedRoomPicture.png' width='140px' height='140px'></img>
                <h2>A Room in Roanoke</h2>
                <p>The is the first sample room that is going to be displayed. This could be a short discription a user provides about their room or something. And then the view details button could take the user the the registration page for this specific room.</p>
                <p><a class='btn btn-secondary' href='#'>View details &raquo;</a></p>
            </div>
            <div class='col-lg-4'>
                <img class='rounded-circle' src='photos/fakeBedRoomPicture_2.png' width='140px' height='140px'></img>
                <h2>A Room in Radford</h2>
                <p>The is the first sample room that is going to be displayed. This could be a short discription a user provides about their room or something. And then the view details button could take the user the the registration page for this specific room.</p>
                <p><a class='btn btn-secondary' href='#'>View details &raquo;</a></p>
            </div>
            <div class='col-lg-4'>
                <img class='rounded-circle' src='photos/fakeBedRoomPicture_3.png' width='140px' height='140px'></img>
                <h2>A Room in Blacksburg</h2>
                <p>The is the first sample room that is going to be displayed. This could be a short discription a user provides about their room or something. And then the view details button could take the user the the registration page for this specific room.</p>
                <p><a class='btn btn-secondary' href='#'>View details &raquo;</a></p>
            </div>
        </div>
    </div> <!-- 1 row with three columns of text -->

    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading">Roanoke. <span class="text-muted">The Star City.</span></h2>
            <p class="lead">Insert text here</p>
        </div>
        <div = class="col-md-5">
            <img id="featurettePhoto" src="https://www.roanokeva.gov/ImageRepository/Document?documentId=12009" width="500px" height="500"></img>
        </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading">Radford. <span class="text-muted">Home of the Highlanders.</span></h2>
            <p class="lead">One of the places we "opperate"!</p>
        </div>
        <div = class="col-md-5">
            <img id="featurettePhoto" src="https://www.insidehighered.com/sites/default/server_files/media/image_34.png" width="500px" height="500"></img>
        </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading">Blacksburg. <span class="text-muted">Home of the Hokies.</span></h2>
            <p class="lead">One of the OTHER places we "opperate"!</p>
        </div>
        <div = class="col-md-5">
            <img id="featurettePhoto" src="https://static.onecms.io/wp-content/uploads/sites/24/2019/10/GettyImages-533209873-2000.jpg" width="500px" height="500"></img>
        </div>
    </div>

    <hr class="featurette-divider">
    
    <footer class="container">
        <p class="float-right"><a href="#">Back to top</a></p>
        <p>&copy; 2017-2019, inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
    </footer>
</body>
</html>


























