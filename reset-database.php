<?php

require_once("database-connection.php");

$con = connectToDatabase();

if (!$con) {
    echo "Connection failed.\n";
} else {
    echo "Connection Successful.\n";
}

$dropAndCreateTables = array( "dropReservations" => "DROP TABLE IF EXISTS Reservations"
                            , "dropRoom_Amenities" => "DROP TABLE IF EXISTS Room_Amenities"
                            , "dropRooms" => "DROP TABLE IF EXISTS Rooms"
                            , "dropUsers" => "DROP TABLE IF EXISTS Users"
                            , "dropAmenities" => "DROP TABLE IF EXISTS Amenities"
                            , "createUsers" => "CREATE TABLE Users ( User_ID INTEGER AUTO_INCREMENT
                                                                   , User_Name VARCHAR(25) NOT NULL
                                                                   , Password VARCHAR(64) NOT NULL
                                                                   , F_Name VARCHAR(30) NOT NULL
                                                                   , L_Name VARCHAR(30) NOT NULL
                                                                   , Email VARCHAR(254) NOT NULL
                                                                   , CONSTRAINT Pk_User PRIMARY KEY (User_ID)
                                                                   )"
                            , "createReservations" => "CREATE TABLE Reservations ( Reservation_ID INTEGER AUTO_INCREMENT
                                                                                 , Reserving_User_ID INTEGER NOT NULL
                                                                                 , Room_ID INTEGER NOT NULL
                                                                                 , Total_Cost DOUBLE NOT NULL
                                                                                 , Duration_of_Stay INTEGER NOT NULL
                                                                                 , CONSTRAINT PK_Reservations PRIMARY KEY (Reservation_ID)
                                                                                 , CONSTRAINT FK_Reserving_User FOREIGN KEY (Reserving_User_ID)
                                                                                     REFERENCES Users(User_ID)
                                                                                 )"
                            , "createRooms" => "CREATE TABLE Rooms ( Room_ID INTEGER AUTO_INCREMENT
                                                                   , User_ID INTEGER NOT NULL
                                                                   , Title VARCHAR(20) NOT NULL
                                                                   , Description VARCHAR(200) NOT NULL
                                                                   , Price_Per_Night DOUBLE NOT NULL
                                                                   , Number_of_Bedrooms INTEGER NOT NULL
                                                                   , Number_of_Bathrooms INTEGER NOT NULL
                                                                   , Square_footage INTEGER NOT NULL
                                                                   , CONSTRAINT PK_Rooms PRIMARY KEY (Room_ID)
                                                                   , CONSTRAINT FK_Room_Poster FOREIGN KEY (User_ID)
                                                                       REFERENCES Users(User_ID)
                                                                   )"
                            , "createAmenities" => "CREATE TABLE Amenities ( Amen_ID INTEGER AUTO_INCREMENT
                                                                           , Amen_name VARCHAR(30) NOT NULL
                                                                           , CONSTRAINT PK_Amenities PRIMARY KEY (Amen_ID)
                                                                           )"
                            , "createRoom_Amenities" => "CREATE TABLE Room_Amenities ( Room_ID INTEGER NOT NULL
                                                                                     , Amen_ID INTEGER NOT NULL
                                                                                     , CONSTRAINT PK_Room_Amenities PRIMARY KEY (Room_ID, Amen_ID)
                                                                                     , CONSTRAINT FK_Room_Amenities_Room_ID FOREIGN KEY (Room_ID)
                                                                                           REFERENCES Rooms(Room_ID)
                                                                                     , CONSTRAINT FK_Room_Amenities_Amen_ID FOREIGN KEY (Room_ID)
                                                                                           REFERENCES Amenities(Amen_ID)
                                                                                     )"
                            );

// Dropping and creating the tables.
//
foreach ($dropAndCreateTables AS $commandName => $command) {
    $result = mysqli_query($con, $command);
    if (!$result) {
        echo "$commandName failed.\n";
    } else {
        echo "$commandName succedded.\n";
    }
}

// Array containing all of the amenities
//
$amenities = array( "Air Conditioning"
                  , "Washer and Dryer"
                  , "Dishwasher"
                  , "Balcony"
                  , "Garage"
                  , "Swimming Pool"
                  , "Fitness Center"
                  , "Private Entrance"
                  , "Pets Allowed"
                  , "Smoking Allowed"
                  );

// Loading the amenity data
//
foreach ($amenities AS $amenity) {
    $insert = "INSERT INTO Amenitites (Amen_name)
               VALUES ('$amenity')";
    $result = mysqli_query($con, $insert);
    if (!$result) {
        echo "Could not insert $amenity.\n";
    } else {
        echo "inserted $amenity.\n";
    }
}

mysqli_close($con);
echo "Database connection closed";

?>
