<?php
error_reporting(E_ALL);

session_start();

require_once("database-connection.php");

$con = connectToDatabase();

if (!$con) echo "Database connection failed.<br />";

// Information for the Room table
$userID      = $_SESSION["userID"];
$title       = mysqli_real_escape_string($con, $_POST["title"]);
$description = mysqli_real_escape_string($con, $_POST["desc"]);
$price       = mysqli_real_escape_string($con, $_POST["price"]);
$bedrooms    = mysqli_real_escape_string($con, $_POST["bedrooms"]);
$bathrooms   = mysqli_real_escape_string($con, $_POST["bathrooms"]);
$sqft        = mysqli_real_escape_string($con, $_POST["sqft"]);
$city  	     = mysqli_real_escape_string($con, $_POST["city"]);
$state 	     = mysqli_real_escape_string($con, $_POST["state"]);

echo var_dump(array_key_exists("ac", $_POST)), "<br />";

// Information for the Room_Amenities table contained inside the $amenities array
$amenities["ac"] = array_key_exists("ac", $_POST) ? mysqli_real_escape_string($con, $_POST["ac"]) : false;
$amenities["washerDryer"] = array_key_exists("washerDryer", $_POST) ? mysqli_real_escape_string($con, $_POST["washerDryer"]) : false;
$amenities["petsAllowed"] = array_key_exists("petsAllowed", $_POST) ? mysqli_real_escape_string($con, $_POST["petsAllowed"]) : false;
$amenities["dishwasher"] = array_key_exists("dishwasher", $_POST,) ? mysqli_real_escape_string($con, $_POST["dishwasher"]) : false;
$amenities["balcony"] = array_key_exists("balcony", $_POST) ? mysqli_real_escape_string($con, $_POST["balcony"]) : false;
$amenities["garage"] = array_key_exists("garage", $_POST) ? mysqli_real_escape_string($con, $_POST["garage"]) : false;
$amenities["pool"] = array_key_exists("pool", $_POST) ? mysqli_real_escape_string($con, $_POST["pool"]) : false;
$amenities["fitnessCenter"] = array_key_exists("fitnessCenter", $_POST) ? mysqli_real_escape_string($con, $_POST["fitnessCenter"]) : false;
$amenities["privateEntrance"] = array_key_exists("privateEntrance", $_POST) ? mysqli_real_escape_string($con, $_POST["privateEntrance"]) : false;
$amenities["smokingAllowed"] = array_key_exists("smokingAllowed", $_POST) ? mysqli_real_escape_string($con, $_POST["smokingAllowed"]) : false;
$roomID = false;

echo var_dump($amenities), "<br />";

$amenNums = array();

// Storing all amenity numbers that were included in the room.
//
foreach ($amenities AS $key => $amenity) {
    if ($amenities[$key] !== false) {
        $query = "SELECT Amen_ID FROM Amenities
                  WHERE Amen_Name LIKE '$amenity'";

        $allRows = mysqli_query($con, $query);
        if (!$allRows) echo "Amenity QUERY FAILED<br />";

        $oneRow = mysqli_fetch_array($allRows);
        if (!$oneRow) {
            echo "The Amenity query returned 0 rows.<br/>";
        } else {
	    echo "Got amen_ID for $amenity<br/>";
            $amenNums[$amenity] = $oneRow["Amen_ID"];
        }
    }
}

var_dump($amenNums);

$insert = "INSERT INTO Rooms ( User_ID
			     , Title
			     , Description
			     , Price_Per_Night
			     , Number_of_Bedrooms
			     , Number_of_Bathrooms
			     , Square_footage
			     , City
			     , State
			     )
	   VALUES ( '$userID'
		  , '$title'
		  , '$description'
		  , $price
		  , $bedrooms
		  , $bathrooms
		  , $sqft
		  , '$city'
		  , '$state'
		  )";

echo "<br /> $insert <br />";

$allRows = mysqli_query($con, $insert);


if (!$allRows) {
    echo "Room Insert failed.</br>";
} else {
    echo "Room Insert Sucseeded.</br>";

    // Storing the new room's Room_ID for use in the Room_Amenities insert
    //
    $query = "SELECT MAX(Room_ID) FROM Rooms
	      WHERE User_ID = $userID";
    $allRows = mysqli_query($con, $query);
    if (!$allRows) {
        echo "Something went wrong with room id query!\n";
    } else {
	echo "Everything worked as it was supposed to with the room id query.\n";
    }
    $oneRow = mysqli_fetch_array($allRows);
    if (!$oneRow) echo "The room_id query returned 0 rows.";
    $roomID = $oneRow["MAX(Room_ID)"];
}

// Inserting the room amenity information into the Room_Amenities table
//
foreach ($amenNums AS $amenNum) {

    $insert = "INSERT INTO Room_Amenities
       	       VALUES ( $roomID, $amenNum )";

    echo "<br/>", $insert, "<br/>";
    $result = mysqli_query($con, $insert);
    if (!$result) {
 	echo "SOMETHING WENT WRONG with the room_amenities insert";
    } else {
	echo "INSERT SUCSESFUL with the room_amenities insert<br/>";
    }

}

header("Location: homepage.php");

/* *********************** PRINTING TABLE OUTPUT FOR TESTING. *********************** */

$query = "SELECT * FROM Rooms";
$result = mysqli_query($con, $query);

if (!$result) {
    echo "Query failed somehow";
} else {
    while ($oneRow = mysqli_fetch_assoc($result)) {
        echo "</br>Room_ID: "
            , $oneRow["Room_ID"]
            , "</br>User_ID: "
            , $oneRow["User_ID"]
            , "</br>Title: "
            , $oneRow["Title"]
            , "</br>Description: "
            , $oneRow["Description"]
            , "</br>Price_Per_Night: "
            , $oneRow["Price_Per_Night"]
            , "</br>Number_of_Bedrooms: "
            , $oneRow["Number_of_Bedrooms"]
            , "</br>Number_of_Bathrooms: "
            , $oneRow["Number_of_Bathrooms"]
            , "</br>Square_footage: "
            , $oneRow["Square_footage"]
            , "</br>";
    }
}

$query = "SELECT * FROM Room_Amenities
	  WHERE Room_ID = $roomID";
$result = mysqli_query($con, $query);

if (!$result) {
    echo "Query failed somehow";
} else {
    while ($oneRow = mysqli_fetch_assoc($result)) {
        echo "</br>Room_ID: "
            , $oneRow["Room_ID"]
            , "</br>Amen_ID: "
            , $oneRow["Amen_ID"]
            , "</br>";
    }
}






















mysqli_close($con);
echo "CONNECTION CLOSED";

?>
