<?php
// Include the Firebase Realtime Database library
include("config.php");
include("firebaseRDB.php");

// Create a new instance of the Firebase Realtime Database
$rdb = new FirebaseRDB($databaseURL);

// Define the data for the spots
$spots = [
    "spot1" => [
        "availability" => [
            "8:00" => "available",
            "8:30" => "unavailable",
            "9:00" => "available"
        ]
    ],
    "spot2" => [
        "availability" => [
            "8:00" => "unavailable",
            "8:30" => "available",
            "9:00" => "unavailable"
        ]
    ],
    // and so on...
];

// Insert the data into the "spots" node
$rdb->insert("spots", $spots);

echo "Parking spot created successfully";
?>