<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport">
    <meta http-equiv="X-UA-Compatible">
    <title>Document</title>
    <link rel="stylesheet" href="uie.css">
    
    <script>
    function showtotal() 
        {
            alert(str);
	           var price=document.getElementById("price").value;  
	           var quantity=document.getElementById("quantity").value; 
	           var totalprice=price*quantity; 
	           //alert(total);
	               document.getElementById("totalprice").value = totalprice;
        }   
    </script>
  
</head>

<body>

<?php

require('../config/autoload.php'); 
include("header1.php");	
include("dbcon.php");

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
	   header('location:login.php');
  }
  else
  { 
    $uemail=$_SESSION['username'];
    $iid = $_GET['id'];
    $q="select * from fruits where fid=".$iid ;
    $info1=$dao->query($q);
    $iname=$info1[0]["fname"];
    $price=$info1[0][""];
    $quantity=$_POST["quantity"];
    $totalprice=$_POST["totalprice"];
    $_SESSION['amount']=$totalprice;

    $bookingdate=date('Y-m-d',time());
    $orderdate=$_POST["orderdate"];
    
   
    $status=1;
    $sql = "INSERT INTO booking(uemail,iid,iname,price,quantity,totalprice,bookingdate,orderdate,status) 
    VALUES ('$uemail','$iid','$iname','$price','$quantity','$totalprice','$bookingdate','$orderdate','$status')";
                                   
    $conn->query($sql);
   // echo $sql;
 echo"<script >location.href = 'viewcart.php'</script>";

}

}

?>


<?php
$dao=new DataAccess();
?>

<?php	$iid=$_GET['id']; 
	 $q="select * from fruits where fid=".$iid ;
    $info=$dao->query($q);
  
?>
 
   

<form action="" method="POST" enctype="multipart/form-data">

 <div class="upper">
        <div class="upper-left">
<?php 
if(isset($_SESSION['username']))
{ 
   $iname=$_SESSION['username'];
?>

 <h7 class="title-w3-agileits title-black-wthree"><?php  echo $iname ?></h7>

<?php } ?>
            <h3>Product Details</h3>
            <img class="img" style="width:300; height:300" src=<?php echo BASE_URL."img/".$info[0]["fimage"]; ?> alt=" " class="img-responsive" />
        
        </div>
        <div class="content">
            <h3>Details</h3>
            <div style="display: block;">
                <label for="name">itemname:</label><br>
                <input id="iname" name="iname" type="text" value="<?php echo $info[0]["fname"];?>"  readonly style="margin-top: 8px;"><br>

                <label for="Total">price</label><br>
                <input id="price" name="price" type="text" value="<?php echo $info[0]["fprice"];?>"  readonly style="margin-top: 8px;"><br>
                
                <label for="quantity">quantity</label><br>
                <input id="quantity" name="quantity" type="text" onkeyup="showtotal()"  style="margin-top: 8px;"><br>

                <label for="totalprice">totalprice</label><br>
                <input id="totalprice" name="totalprice" type="text"  style="margin-top: 8px;"><br>
                
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
    </form>
</body>

</html>