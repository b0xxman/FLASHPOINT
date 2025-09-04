<?php
include 'db/config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $bike_id = $_POST['bike_id'];
    $user_name = $_POST['user_name'];

    $update = "UPDATE bikes SET status='rented' WHERE id=$bike_id";
    $insert = "INSERT INTO rentals (bike_id, user_name) VALUES ($bike_id, '$user_name')";

    if (mysqli_query($conn, $update) && mysqli_query($conn, $insert)) {
        echo "Bike rented successfully!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
<a href="index.html">Go Back</a>