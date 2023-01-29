<?php
    include("config.php");
    include("firebaseRDB.php");

    $rdb = new FirebaseRDB($databaseURL);

     $start_time = strtotime("00:00:00");
     echo $start_time;
    // Retrieve all bookings for the specified spot
    $spot_id = $_POST['spot_id'];
    $bookings = $rdb->retrieve("/bookings/",null,'orderByValue','spot_id',$spot_id);
    $bookings = json_decode($bookings);

    // Get the available times for the spot
    $available_times = get_available_times($bookings);

    // Display the available times in the form
    echo '<label for="start-time">Start time:</label>';
    echo '<select id="start-time-input" name="start_time">';
    foreach ($available_times as $time) {
        echo '<option value="' . $time . '">' . $time . '</option>';
    }
    echo '</select>';

    echo '<label for="end-time">End time:</label>';
    echo '<select id="end-time-input" name="end_time">';
    foreach ($available_times as $time) {
        echo '<option value="' . $time . '">' . $time . '</option>';
    }
    echo '</select>';

    // Function to get the available times for a spot
    function get_available_times($bookings) {
        $available_times = array();
        $start_time = strtotime("00:00:00");
        $end_time = strtotime("23:59:59");

        // Iterate through the bookings and get the available times
        foreach ($bookings as $booking) {
            if ($booking['status'] === 'approved') {
                $start_time = max($start_time, strtotime($booking['start_time']));
                $end_time = min($end_time, strtotime($booking['end_time']));
            }
        }

        // Add the available times to the array
        while ($start_time <= $end_time) {
            $available_times[] = date('H:i:s', $start_time);
            $start_time = strtotime('+30 minutes', $start_time);
        }

        return $available_times;
    }



?>
