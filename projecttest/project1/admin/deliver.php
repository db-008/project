

<?php	
include("dbcon.php");
$bid = $_GET['id'];
$sql = "update booking set status=5 where bid=".$bid;

$conn->query($sql);

 header('location:bookings.php');



?>

