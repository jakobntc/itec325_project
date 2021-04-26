<?php

//ini_set('display_errors', 1); 
//ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

//date_default_timezone_set('America/New_York'); //          
/*
require_once('utils.php');
require_once('validate.php');
require_once("constants.php");  // Use `$GLOBALS` to use these values, inside a function.
*/


require_once("database-connection.php");

$con = connectToDatabase();

if (!$con) echo "Database connection failed.\n";

// Information for the Room table
$userID = $_SESSION["userID"];
$title = mysqli_real_escape_string($con, $_POST["title"]);
$description = mysqli_real_escape_string($con, $_POST["desc"]);
$price = mysqli_real_escape_string($con, $_POST["price"]);
$bedrooms = mysqli_real_escape_string($con, $_POST["bedrooms"]);
$bathrooms = mysqli_real_escape_string($con, $_POST["bathrooms"]);
$sqft = mysqli_real_escape_string($con, $_POST["sqft"]);

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
$roomID = false;

$amenNums = array();

// Storing all amenity numbers that were included in the room.
//
foreach ($amenities AS $amenity) {
    $query = "SELECT Amen_ID FROM Amenities
	      WHERE Amen_Name LIKE '$amenity'";

    $allRows = mysqli_query($con, $query);
    if (!$allRows) echo "QUERY FAILED";

    $oneRow = mysqli_fetch_array($allRows);
    if (!$oneRow) {
	echo "The query returned 0 rows.<br/>";
    } else {
	$amenNums["$amenity"] = $oneRow["Amen_ID"];
    }
}

$insert = "INSERT INTO Rooms ( User_ID
			     , Title
			     , Description
			     , Price_Per_Night
			     , Number_of_Bedrooms
			     , Number_of_Bathrooms
			     , Square_footage
			     )
	   VALUES ( '$userID'
		  , '$title'
		  , '$description'
		  , $price
		  , $bedrooms
		  , $bathrooms
		  , $sqft
		  )";

$allRows = mysqli_query($con, $insert);


if (!$allRows) {
    echo "Insert failed.</br>";
} else {
    echo "Insert Succeeded.</br>";

    // Storing the new room's Room_ID for use in the Room_Amenities insert
    //
    $query = "SELECT MAX(Room_ID) FROM Rooms
	      WHERE User_ID = $userID";
    $allRows = mysqli_query($con, $query);
    if (!$allRows) {
        echo "Something went wrong!\n";
    } else {
	echo "Everything worked as it was supposed to.\n";
    }
    $oneRow = mysqli_fetch_array($allRows);
    if (!$oneRow) echo "The query returned 0 rows.";
    $roomID = $oneRow["MAX(Room_ID)"];
}

// Inserting the room amenity information into the Room_Amenities table
//
foreach ($amenities AS $amenity) {

    $insert = "INSERT INTO Room_Amenities ( Room_ID
    				      , Amen_ID
         				      )
       	   VALUES ( $roomID
      		  , "
      		  . $amenNums["$amenity"]
      		  . ")";
    echo "<br/>", $insert, "<br/>";
    $result = mysqli_query($con, $insert);
    if (!$result) {
 	echo "SOMETHING WENT WRONG";
    } else {
	echo "INSERT SUCSESFUL<br/>";
    }

}

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
