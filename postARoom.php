<?php
    require_once("utils/utils.php");
    require_once("utils/constants.php");
?>

<!doctype html>
<html>
   <head>
     <title>Post a Room Form</title> 
	 <link rel="stylesheet" href="styles/postARoom_style.css">
     <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">      
   </head>
   <body style="background-image: url('photos/postRoomBackground.jpg'); background-size: cover">

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
                        <li class="nav-item">
                            <form method="get" action="login.php">
                                <button class="btn btn-primary" type="submit">Login</button>
                            </form>
                        </li>
                        <li class="nav-item">
                            <form method="get" action="registration.php">
                                <button class="btn btn-primary" type="submit">Sign Up</button>
                            </form>
                        </li>  
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div class="container" style="margin-top: 50px; width: 700px">
 	<form method="post" action="postRoomHandle.php" id="roomPosting">
        <div class="row">
            <div class="col-sm">
                <div class="row justify-content-center">
                    <h1 id="title" style="color: white">Post a Room</h2>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="title">Title:</label><br>
                        <label for="desc" >Description:</label><br>
                        <label for="price">Price:</label><br>
                        <label for="bedrooms">Number of Bedrooms:</label>
                        <label for="bathrooms">Number of Bathrooms:</label>
                        <label for="sqft">Square Feet:</label>

                    </div>
                    <div class="col">
                        <input type="text" class="postInput" id="title" name="title">
                        <textarea id="desc" class="postInput" name="desc" style="width: 250px;"></textarea>
                        <input type="number" class="postInput" id="price" name="price">
                        <input type="number" class="postInput" id="bedrooms" name="bedrooms">
                        <input type="number" class="postInput" id="bathrooms" name="bathrooms">
                        <input type="number" class="postInput" id="sqft" name="sqft">

                    </div>
                </div>    
                <label for="amenities">Amenities *</label>
                <div class="row justify-content-center">
                    <table id="amenities" name="amenities">
		        <tr>
		            <th><input type="checkbox" name="ac" id="ac" value="Air Conditioning">Air Conditioning</th>
		            <th><input type="checkbox" name="washerDryer" id="washerDryer" value="Washer and Dryer">Washer and Dryer</th>
		            <th><input type="checkbox" name="petsAllowed" id="petsAllowed" value="Pets Allowed">Pets Allowed</th>
		        </tr>
		        <tr>
		            <th><input type="checkbox" name="dishwasher" id="dishwasher" value="Dishwasher">Dishwasher</th>
		            <th><input type="checkbox" name="balcony" id="balcony" value="Balcony">Balcony</th>
		            <th><input type="checkbox" name="garage" id="garage" value="Garage">Garage</th>
		        </tr>
		        <tr>
		            <th><input type="checkbox" name="pool" id="pool" value="Swimming Pool">Swimming Pool</th>
		            <th><input type="checkbox" name="fitnessCenter" id="fitnessCenter" value="Fitness Center">Fitness Center</th>
		            <th><input type="checkbox" name="privateEntrance" id="privateEntrance" value="Private Entrance">Private Entrance</th>
		        </tr>
                    </table>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="smoking">Smoking allowed</label>
                        <input type="checkbox" id="smoking" name="smokingAllowed" value="Smoking Allowed" style="margin-top: 30px; margin-left: 20px">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="img">Select Photos:</label>
                        <input type="file" id="img" name="img" accept="image/*" style="color: white; text-shadow: 1px 1px 1px #000000;">
                    </div>
                </div>
                <div class="row justify-content-center">
                    <button type="submit" formmethod="post" name="submit" value="submit">Submit</button>
                </div>
            </div>
        </div>
    </div>
	</form>
   </body>
 </html>
