<?php

    include("config.php");
include("firebaseRDB.php");

$rdb = new FirebaseRDB($databaseURL);

function assignSpotToGuest($rdb, $guestName, $startTime, $endTime) {
    // Retrieve all parking spots from the database
    $allSpots = $rdb->retrieve("/spots");
    $allSpots = json_decode($allSpots);

    // Iterate through all spots to find the first available one
    $assignedSpot = null;
    foreach ($allSpots as $spot) {
        $isFree = true;
        // Check if the spot is already booked during the requested time
        foreach ($spot['bookings'] as $booking) {
            if ($booking['status'] == 'approved' && ($startTime > $booking['start_time'] && $startTime < $booking['end_time'])
                || ($endTime > $booking['start_time'] && $endTime < $booking['end_time'])) {
                $isFree = false;
                break;
            }
        }
        if ($isFree) {
            $assignedSpot = $spot;
            break;
        }
    }

    if ($assignedSpot != null) {
        // Create a new booking for the guest
        $insert = $rdb->insert("bookings", [
   "spot_id" => $assignedSpot['id'] ,
   "start_time"     => $startTime,
   "end_time" => $endTime
]);
       return $assignedSpot['id'];
    } else {
        return null;
    }
}

// Example usage
$guestName = "John Smith";
$startTime = "2022-07-01 10:00:00";
$endTime = "2022-07-01 12:00:00";


$assignedSpotId = assignSpotToGuest($rdb, $guestName, $startTime, $endTime);
if ($assignedSpotId != null) {
    echo "A spot has been assigned to guest '$guestName' with spot id: $assignedSpotId";
} else {
    echo "Sorry, no available spots during the requested time range.";
}
?>