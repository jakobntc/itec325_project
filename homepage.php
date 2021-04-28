<?php
error_reporting(E_ALL);
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
                        <a class="nav-link" href="viewAllRooms.php">View all Rooms</a>
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
                        echo "<li class='nav-item'>"
                    	, "<form method='get' action='account.php'>"
			, "<button class='btn btn-primary' type='submit'>Account</button>"
                    	, "</form>"
			, "</li>"
			, "<li class='nav-item'>"
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
                   <img src='http://cdn.home-designing.com/wp-content/uploads/2016/10/Marilyn-Monroe-portrait-black-and-white-wall-decor.jpg' alt='Fake Photo' alt='First slide' width="100%" height="100%">
                    <div class='mask rgba-black-light'></div>
                </div>
                <div class='container'>
                    <div class='carousel-caption'>
                        <h1>Book your stay today!</h1>
                        <p>This room could be where you stay on your next trip!</p>
                        <p><a class='btn btn-lg btn-primary' href='#'>Book now!</a></p>
                    </div>
                </div>
            </div> <!-- /carousel item one -->
            <div class='carousel-item'>
                <div class='view'>
                    <img src='https://hips.hearstapps.com/clv.h-cdn.co/assets/17/08/1487691224-one-closet-four-ways-guest-bedroom-0916.jpg' alt='Fake Photo' alt='Second slide'>
                    <div class='mask rgba-black-light'></div>
                </div>
                <div class='container'>
                    <div class='carousel-caption'>
                        <h1>Book your stay today!</h1>
                        <p>This room could be where you stay on your next trip!</p>
                        <p><a class='btn btn-lg btn-primary' href='#'>Book now!</a></p>
                    </div>
                </div>
            </div> <!-- /carousel item two -->
            <div class='carousel-item'>
            <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="https://st.hzcdn.com/simgs/pictures/bedrooms/olana-drive-hills-and-grant-img~3571422f085097cb_14-8470-1-3d7769a.jpg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>
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
                <img class='rounded-circle' src='https://st.hzcdn.com/simgs/pictures/bedrooms/olana-drive-hills-and-grant-img~3571422f085097cb_14-8470-1-3d7769a.jpg' width='140px' height='140px'></img>
                <h2>A Room in Roanoke</h2>
                <p>Quite cozy if I do say so myself!</p>
		<form method="get" action="viewARoom.php" id="homepageRoom1">
		    <input type="hidden" name="roomID" id="hiddenInput1"/>
		    <button class="btn btn-secondary" onclick="document.getElementById('hiddenInput1').value = 1; document.getElementById('homepageRoom1').submit();">View details &raquo;</button>
		</form>
            </div>
            <div class='col-lg-4'>
                <img class='rounded-circle' src='https://st.hzcdn.com/simgs/pictures/bedrooms/modern-farmhouse-upstate-crisp-architects-img~8eb1a0030ce5bb4f_14-1027-1-8da1692.jpg' width='140px' height='140px'></img>
                <h2>A Room in Radford</h2>
                <p>You could live here next semester!</p>
		<form method="get" action="viewARoom.php" id="homepageRoom2" onsubmit="document.getElementById('hiddenInput1').value == 2">
		    <input type="hidden" name="roomID" id="hiddenInput2"/>
		    <button class="btn btn-secondary" onclick="document.getElementById('hiddenInput2').value = 2; document.getElementById('homepageRoom2').submit();">View details &raquo;</button>
		</form>
            </div>
            <div class='col-lg-4'>
                <img class='rounded-circle' src='https://cdn.trendir.com/wp-content/uploads/old/interiors/2016/01/26/light-grey-bedroom-with-a-view-bolzan-handsome-big.jpg' width='140px' height='140px'></img>
                <h2>A Room in Blacksburg</h2>
                <p>this one costs more just because it's in Blacksburg.</p>
		<form method="get" action="viewARoom.php" id="homepageRoom3" onsubmit="document.getElementById('hiddenInput1').value == 3">
		    <input type="hidden" name="roomID" id="hiddenInput3"/>
		    <button class="btn btn-secondary" onclick="document.getElementById('hiddenInput3').value = 3; document.getElementById('homepageRoom3').submit();">View details &raquo;</button>
		</form>
            </div>
        </div>
    </div> <!-- 1 row with three columns of text -->

    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading">Roanoke. <span class="text-muted">The Star City.</span></h2>
            <p class="lead">Roanoke is a city in the Blue Ridge Mountains of southwest Virginia. It’s known for the Roanoke Star, also known as the Mill Mountain Star, a neon landmark overlooking the city from the summit of Mill Mountain. The surrounding park area is home to trails, picnic areas and the Mill Mountain Zoo. Downtown, the Taubman Museum of Art highlights work by American artists like Thomas Eakins and John Singer Sargent.</p>
        </div>
        <div = class="col-md-5">
            <img id="featurettePhoto" src="https://www.roanokeva.gov/ImageRepository/Document?documentId=12009" width="500px" height="500"></img>
        </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading">Radford. <span class="text-muted">Home of the Highlanders.</span></h2>
            <p class="lead">Radford is an independent city in the U.S. state of Virginia. As of 2010, the population was 16,408 by the United States Census Bureau. For statistical purposes, the Bureau of Economic Analysis combines the city of Radford with neighboring Montgomery County.</p>
        </div>
        <div class="col-md-5">
            <img id="featurettePhoto" src="https://www.insidehighered.com/sites/default/server_files/media/image_34.png" width="500px" height="500"></img>
        </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading">Blacksburg. <span class="text-muted">Home of the Hokies.</span></h2>
            <p class="lead">Blacksburg is an incorporated town in Montgomery County, Virginia, United States, with a population of 42,620 at the 2010 census. Blacksburg, as well as the surrounding county, is dominated economically and demographically by the presence of Virginia Tech.</p>
        </div>
        <div class="col-md-5">
            <img id="featurettePhoto" src="https://static.onecms.io/wp-content/uploads/sites/24/2019/10/GettyImages-533209873-2000.jpg" width="500px" height="500"></img>
        </div>
    </div>

    <hr class="featurette-divider">
    
    <footer class="container">
        <p class="float-right"><a href="#">Back to top</a></p>
        <p>&copy; 2017-2019, inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a>The time it has been since you have verified who you are is: <?php echo $_SESSION["lastVerified"] ?></p>
    </footer>
</body>
</html>
