<?php
include("config.php");
include("firebaseRDB.php");

$rdb = new FirebaseRDB($databaseURL);

if (isset($_POST['spot_id']) && isset($_POST['start_time']) && isset($_POST['end_time'])) {
    $spot_id = $_POST['spot_id'];
    $start_time = $_POST['start_time'];
    $end_time = $_POST['end_time'];

    if (isSpotAvailable($rdb, $spot_id, $start_time, $end_time)) {
        createBooking($rdb, $spot_id, $start_time, $end_time);
        echo "Booking created successfully!";
    } else {
        echo "Sorry, the selected spot is not available during the specified time range.";
    }
}

function createBooking($rdb, $spot_id, $start_time, $end_time) {
    $rdb->insert("bookings", [
        "spot_id" => $spot_id ,
        "start_time"     => $start_time,
        "end_time" => $end_time
    ]);
}

function isSpotAvailable($rdb, $spotId, $startTime, $endTime) {
    $bookings = $rdb->retrieve("/bookings/",null,'orderByValue','spot_id',$spotId);
    $bookings = json_decode($bookings);
    foreach ($bookings as $booking) {
        if ($booking['status'] === 'approved' && 
            ($startTime >= $booking['start_time'] && $startTime <= $booking['end_time']) ||
            ($endTime >= $booking['start_time'] && $endTime <= $booking['end_time'])) {
            return false; 
        }
    }
    return true;
}
?>
