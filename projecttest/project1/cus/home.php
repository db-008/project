 
 <?php require('../config/autoload.php'); ?>
 <?php //include('header.php');?>

 <?php
if(isset($_SESSION['username']))
{
    $name=$_SESSION['username'];
    include("index.php");
}
else 
{ 
    include("indexlogin.php");
}
?>



