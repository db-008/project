

<?php	
include("dbcon.php");
$bid = $_GET['id'];
$sql = "update booking set status=2 where bid=".$bid;

$conn->query($sql);

 header('location:viewbooking.php');



?>

