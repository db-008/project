 
 <?php require('../config/autoload.php'); ?>
 <?php //include('header.php');?>

 <?php
if(isset($_SESSION['username']))
{
    $name=$_SESSION['username'];
    include("afterlogin.php");
}
else 
{ 
    include("header.php");
}
?>





 <?php $dao=new DataAccess();?>
   <!-- Start All Title Box -->
   <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Services</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Services</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->
 <div class="products-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-all text-center">
                        <h1>Vegetables</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="special-menu text-center">
                        <div class="button-group filter-button-group">
                        <button class="active" data-filter="*" onclick="window.location.href='gallery.php'">All</button>
                            <button id="vegetablesButton" data-filter=".bulbs" onclick="location.href='category_seller.php'">Vegetables</button>
                            <button id="fruitsButton" data-filter=".bulbs" onclick="location.href='category_seller2.php'">Fruits</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row special-list">
            <?php
			
            $q="select * from veg where status=1";

$info=$dao->query($q);
//print_r($info);

           $i=0;          
           while($i<count($info))
           
{ $s=$info[$i]["veg_image"];
   
       ?>	
                <div class="col-lg-3 col-md-6 special-grid bulbs">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                <p class="sale"><?php echo $info[$i]["veg_name"]?></p>
                            </div>
                            <img src=<?php echo BASE_URL."img/".$info[$i]["veg_image"]; ?> class="img-fluid" alt="Image">
                            <div class="mask-icon">
                                <ul>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                </ul>
                                <?php


                                 // Check if the user is logged in
                                 if(isset($_SESSION['username'])) {
                                 // If the user is logged in, display the "Add to Cart" button
                                 echo '<a class="cart" href="singleitemveg.php?id=' . $info[$i]["veg_id"] . '">Add to Cart</a>';
                                 } else {
                                 // If the user is not logged in, display a message or redirect to the login page
                                 echo '<p style="color: white; margin-top: 100px;">Please login to add items to the cart.</p>';

                                 // Alternatively, you can redirect to the login page
                                 //header("Location: login.php");
                                 }
                                ?>

                            </div>
                        </div>
                        <div class="why-text">
                        <h4 class="sale"><?php echo strtoupper($info[$i]["veg_name"])?></h4>
                            <h5 class="sale"><?php echo '₹' . $info[$i]["veg_price"]?></h5>
                        </div>
                    </div>
                </div>

                <?php 
				$i++;
				} ?>

            </div>
        </div>
    </div>