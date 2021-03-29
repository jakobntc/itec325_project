<?php
    require_once("utils/utils.php");
    require_once("utils/constants.php");
?>

<!doctype html>
<html>
   <head>
     <title>Post a Room Form</title> 
	 <link rel="stylesheet" href="styles/styles.css">        
   </head>
   <body>
	<form action="postRoomHandle.php" id='postRoomInfo' method="post">
		<h1 id="title">Post a Room</h2>

        <label for="title">Title *</label>
        <input type="text" id="title" name="title"><br><br>

        <label for="desc">Description *</label>
        <input type="text" id="desc" name="desc"><br><br>

        <label for="price">Price *</label>
        <input type="number" id="price" name="price"><br><br>

        <label for="bedrooms">Number of Bedrooms *</label>
        <input type="number" id="bedrooms" name="bedrooms"><br><br>

        <label for="bathrooms">Number of Bathrooms *</label>
        <input type="number" id="bathrooms" name="bathrooms"><br><br>
        
        <label for="sqft">Square Feet *</label>
        <input type="number" id="sqft" name="sqft"><br><br>

        <label for="amenities">Amenities *</label>
        <table id="amenities" name="amenities">
            <tr>
                <th><input type="checkbox" id="ac">Air Conditioning</th>
                <th><input type="checkbox" id="washerDryer">Washer and Dryer</th>
                <th><input type="checkbox" id="petsAllowed">Pets Allowed</th>
            </tr>
            <tr>
                <th><input type="checkbox" id="dishwasher">Dishwasher</th>
                <th><input type="checkbox" id="balcony">Balcony</th>
                <th><input type="checkbox" id="garage">Garage</th>
            </tr>
            <tr>
                <th><input type="checkbox" id="pool">Swimming Pool</th>
                <th><input type="checkbox" id="fitnessCenter">Fitness Center</th>
                <th><input type="checkbox" id="privateEntrance">Private Entrance</th>
            </tr>
        </table><br>

        <th><input type="checkbox" id="smoking">Smoking allowed *</th><br><br>

        <label for="img">Select Photos:</label>
        <input type="file" id="img" name="img" accept="image/*"><br><br>

		<button type="submit" formmethod="post" name="submit" value="submit">Submit</button>
	</form>
   </body>
 </html>
