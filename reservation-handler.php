<?php

error_reporting(E_ALL);

require_once("database-connection.php");

session_start();

if ( (time() - $_SESSION["verificaitonTime"]) >= 800) {
    session_unset();
    session_destroy();
    setcookie( session_name(), "", 1, "/");
} else {
    $_SESSION["lastVerified"] = time() - $_SESSION["verificaitonTime"];

    $con = connectToDatabase();
    if (!$con) echo "SOMETHING WENT WRONG WITH THE DATABASE CONNECTION";
    
    $userID = $_SESSION["userID"];
    $roomID = $_POST["roomID"];
    $cost   = $_POST["cost"];

    $query = "SELECT * FROM Reservations
	      WHERE Room_ID = $roomID";
    $allRows = mysqli_query($con, $query);
    if (!$allRows) echo "Something went wrong with the reservations query.<br />";
    $oneRow = mysqli_fetch_array($allRows);

    if (!$oneRow) {
	echo "No rows returned. User has not reserved this room.";
        $insert = "INSERT INTO Reservations ( Reserving_User_ID
        				    , Room_ID
        				    , Total_Cost
        				    )
        	   VALUES ( $userID
        		  , $roomID
        		  , $cost
        		  )";
        echo "<br /> $insert <br />";
        
        $result = mysqli_query($con, $insert);
        if (!$result) {
            echo "Something went wrong when trying to insert the reservation.<br />";
        } else {
            echo "Everything worked fine.<br />";
        }
        mysqli_close($con);
	header("Location: homepage.php");
    } else {
        mysqli_close($con);
	header("Location: viewARoom.php?reserved=true&roomID=$roomID");
    }
}
?>
