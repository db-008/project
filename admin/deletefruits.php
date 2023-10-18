

<?php	
include("dbcon.php");
$bid = $_GET['id'];
$sql = "update fruits set status=2 where  fid=".$bid;

$conn->query($sql);

 header('location:viewfruits.php');



?>

