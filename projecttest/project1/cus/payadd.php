<?php require('../config/autoload.php'); ?>
<?php
include("dbcon.php");

// Assuming you have received the payment and want to update the status of bookings from 3 to 4.
// First, select the bookings with status 3 for the currently logged in user.
$name = $_SESSION['username'];
$sqlSelect = "SELECT bid FROM booking WHERE uemail='$name' AND status=3";

$result = $conn->query($sqlSelect);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $bid = $row['bid'];
        // Update the status of each booking to 4.
        $sqlUpdate = "UPDATE booking SET status=4 WHERE bid=$bid";
        $conn->query($sqlUpdate);
    }
    header('location:seller.php');
}

// Redirect to the viewbooking.php page after updating the statuses.

?>
