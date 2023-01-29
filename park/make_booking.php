<?php
include("config.php");
include("firebaseRDB.php");



$rdb = new FirebaseRDB($databaseURL);

function createBooking($rdb, $spot_id, $start_time, $end_time) {
    // Create a new booking object
    $insert = $rdb->insert("bookings", [
   "spot_id" => $spot_id ,
   "start_time"     => $start_time,
   "end_time" => $end_time
]);
    // Add the new booking to the database
    //$rdb->push("bookings", $new_booking);
     echo "booking has been created";
}

// Example usage
$spot_id = $_POST['spot_id'];
$start_time = $_POST['start_time'];
$end_time = $_POST['end_time'];


createBooking($rdb, $spot_id, $start_time, $end_time);

isSpotAvailable($rdb, $spot_id, $start_time, $end_time);

function isSpotAvailable($rdb, $spotId, $startTime, $endTime) {
    // Retrieve all bookings for the specified spot
    $bookings = $rdb->retrieve("/spots/",$spotId,'path','bookings');
    $bookings = json_decode($bookings);
    // Iterate through the bookings to check if the spot is available during the specified time range
    foreach ($bookings as $booking) {
        if ($booking['status'] === 'approved' && 
            ($startTime >= $booking['start_time'] && $startTime <= $booking['end_time']) ||
            ($endTime >= $booking['start_time'] && $endTime <= $booking['end_time'])) {
            return false; // Spot is not available
        }
    }
    return true; // Spot is available
}


?>
