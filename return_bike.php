<?php
include 'db/config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $bike_id = $_POST['bike_id'];

    $updateBike = "UPDATE bikes SET status='available' WHERE id=$bike_id";
    $updateRental = "UPDATE rentals SET return_time=NOW() WHERE bike_id=$bike_id AND return_time IS NULL";

    if (mysqli_query($conn, $updateBike) && mysqli_query($conn, $updateRental)) {
        echo "Bike returned successfully!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
<a href="index.html">Go Back</a>