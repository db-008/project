

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport">
    <meta http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="ui.css"> 
    
    <script>
    function showtotal() 
        {
	           var price=document.getElementById("price").value;  
	           var qty=document.getElementById("qty").value; 
	           var total=price*qty; 
	           //alert(total);
	               document.getElementById("total").value = total;
        }   
    </script>
  
</head>

<body>

<?php

require('../config/autoload.php'); 
//include("header.php");	
include("dbcon.php");
include("headergall.php");
?>

<?php 

$iid = "";
$iname = "";
$name="";
$dao=new DataAccess();
?>



<?php
if(isset($_POST["btn_insert"]))
{
if(!isset($_SESSION['username']))
   {
	   header('location:seller.php');
  }
  else
  { 
    $uemail=$_SESSION['username'];
    $iid = $_GET['id'];
    $q="select * from veg where vege_id=".$iid ;
    $info1=$dao->query($q);
    $iname=$info1[0]["veg_name"];
    $price=$info1[0]["veg_price"];
    $quantity=$_POST["qty"];
    $totalprice=$_POST["total"];
    $_SESSION['total']=$totalprice;

    $bookingdate=date('Y-m-d',time());
    $orderdate=$_POST["orderdate"];
    
   
    $status=1;
    $sql = "INSERT INTO booking(uemail,iid,iname,price,quantity,totalprice,bookingdate,orderdate,status) 
    VALUES ('$uemail','$iid','$iname','$price','$quantity','$totalprice','$bookingdate','$orderdate','$status')";
                                   
    $conn->query($sql);
    echo $sql;
 echo"<script >location.href = 'viewbooking.php'</script>";

}

}

?>


<?php
$dao=new DataAccess();
?>

<?php	$iid=$_GET['id']; 
	 $q="select * from veg where vege_id=".$iid ;
    $info=$dao->query($q);
  
?>
 
   

<form action="" method="POST" enctype="multipart/form-data">

 <div class="upper">
    <div class="logo">

</div>
        <div class="upper-left">
<?php 
if(isset($_SESSION['username']))
{ 
   $name=$_SESSION['username'];
?>

 <h7 class="title-w3-agileits title-black-wthree"><?php  echo $name ?></h7>

<?php } ?>
            
            <h3>PRODUCT DETAILS</h3>
            <img class="img" style="width:300; height:300" src=<?php echo BASE_URL."uploads/".$info[0]["veg_image"]; ?> alt=" " class="img-responsive" />
        
        </div>
        <div class="content">
            <h3>Details</h3>
            <div style="display: block;">
                <label for="name">itemname:</label><br>
                <input id="iname" name="iname" type="text" value="<?php echo $info[0]["veg_name"];?>"  readonly style="margin-top: 8px;"><br>

                <label for="Total">price</label><br>
                <input id="price" name="price" type="text" value="<?php echo $info[0]["veg_price"];?>"  readonly style="margin-top: 8px;"><br>
                
                <label for="quantity">quantity</label><br>
                <input id="qty" name="qty" type="text" onkeyup="showtotal()"  style="margin-top: 8px;"><br>

                <label for="totalprice">totalprice</label><br>
                <input id="total" name="total" type="text"  style="margin-top: 8px;"><br>
                
                <label for="">orderdate</label><br>
                <input id="orderdate" name="orderdate" type="date"   style="margin-top: 8px;"><br>
            </div>
        </div>
    </div>
    <div class="lower">
        <div class="btn-grp">
                <button class="buttons" name="btn_insert" id="btn-1">booking</button>
                      
        </div>
    </div>





</div>


<br><br>
    <?php include("end.php")?>
</body>

</html>