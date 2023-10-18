

<?php	
include("dbcon.php");
$bid = $_GET['id'];
$sql = "update veg set status=2 where  veg_id=".$bid;

$conn->query($sql);

 header('location:viewvegetable.php');



?>

