<?php
include 'db/config.php';

$result = mysqli_query($conn, "SELECT * FROM bikes");

echo "<h2>Available Bikes</h2>";
echo "<ul>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "<li>
        <img src='images/{$row['image']}' width='100'><br>
        <strong>{$row['name']}</strong><br>
        Status: {$row['status']}<br>
        Price/hr: $ {$row['price_per_hour']}<br>
    </li><hr>";
}
echo "</ul>";
?>
<a href="index.html">Go Back</a>