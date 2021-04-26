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
        </table><br>

        <th><input type="checkbox" id="smoking" value="Smoking Allowed">Smoking allowed *</th><br><br>

        <label for="img">Select Photos:</label>
        <input type="file" id="img" name="img" accept="image/*"><br><br>

		<button type="submit" formmethod="post" name="submit" value="submit">Submit</button>
	</form>
   </body>
 </html>
