<html>
<?php require('../config/autoload.php');
include("dbcon.php") ?>

<?php
$dao=new DataAccess();

$name=$_SESSION['username'];

?>
<?php include('afterlogin.php'); ?>

  <!-- Start All Title Box -->
  <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Booking</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Shop</a></li>
                        <li class="breadcrumb-item active">Add to Cart</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->
    

<body>



<?php 

$iid = "";
$iname = "";
$name="";
$dao=new DataAccess();
?>



<?php
if (isset($_POST["btn_insert"])) {
    if (!isset($_SESSION['username'])) {
        header('location:login.php');
    } else {
        $uemail = $_SESSION['username'];
        $iid = $_GET['id'];
        $q = "select * from veg where veg_id=" . $iid;
        $info1 = $dao->query($q);
        $iname = $info1[0]["veg_name"];
        $price = $info1[0]["veg_price"];
        $quantity = $_POST["quantity"];
        $totalprice = $_POST["totalprice"];
        $_SESSION['amount'] = $totalprice;

        $bookingdate = date('Y-m-d', time());

        $status = 1;

        // Get the current stock quantity
        $currentStock = $info1[0]["stocks"];

        // Check if there is enough stock
        if ($quantity <= $currentStock) {
            // Calculate the new stock after booking
            $newStock = (int)$currentStock - (int)$quantity;


            // Update the veg table with the new stock quantity
            $updateStockQuery = "UPDATE veg SET stocks = $newStock WHERE veg_id = $iid";
            $conn->query($updateStockQuery);

            // Insert the booking information into the booking table
            $sql = "INSERT INTO booking(uemail,iid,iname,price,quantity,totalprice,bookingdate,orderstatus,status) 
                    VALUES ('$uemail','$iid','$iname','$price','$quantity','$totalprice','$bookingdate','Pending','$status')";
            $conn->query($sql);

            echo "<script >location.href = 'wishlist.php'</script>";
        } else {
            echo "<script>alert('Not enough stock available');</script>";
        }
    }
}
?>




<?php
$dao=new DataAccess();
?>

<?php	$iid=$_GET['id']; 
 $q="select * from veg where veg_id=".$iid ;
 $info=$dao->query($q);
  
?>
 
   
<form action="" method="POST" enctype="multipart/form-data">
    <div class="upper">
        <div class="upper-left">
            <?php 
            if(isset($_SESSION['username']))
            { 
                $iname = $_SESSION['username'];
            }
            ?>

            <div class="shop-detail-box-main">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-5 col-lg-5 col-md-6">
                            <img class="img" style="width: 400; height: 400" src="<?php echo BASE_URL."img/".$info[0]["veg_image"]; ?>" alt=" " class="img-responsive" />
                        </div>

                        <div class="col-xl-7 col-lg-7 col-md-6">
                            <div class="single-product-details">
                                <h2 style="margin-top: 8px;"><?php echo $info[0]["veg_name"];?></h2>
                                <h5 style="margin-top: 8px;"><?php echo '₹' .  $info[0]["veg_price"];?></h5>
                                <label for="quantity" style="margin-top: 8px; font-weight: bold;">Quantity:</label><br>
                                <input id="quantity" name="quantity" type="text" onkeyup="showtotal()"  style="margin-top: 8px;"><br>
                                <label for="quantity" style="margin-top: 8px; font-weight: bold;">Totalprice:</label><br>
                                <input id="totalprice" name="totalprice" type="text"  style="margin-top: 8px;"><br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="btn-grp">
    <button class="btn hvr-hover" type="submit" name="btn_insert" style="color: white; background-color: #006400; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer;margin-left:600px;margin-top:-100px;">Add item</button>

    </div>
</form>
    
    <script>
      function showtotal() 
      {
        var price = <?php echo $info[0]["veg_price"]; ?>;
        var quantity = document.getElementById("quantity").value;
        var totalprice = price * quantity;
        document.getElementById("totalprice").value = totalprice;
      }
    </script>

<!-- Add any additional scripts or links to scripts here -->

</body>
</html>