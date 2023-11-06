 
 <?php require('../config/autoload.php'); ?>
 <?php //include('header.php');?>

 <?php
if(isset($_SESSION['username']))
{
    $name=$_SESSION['username'];
    include("headergall.php");
}
else 
{ 

    header('location:sellerlogin.php');
}
?>





 <?php $dao=new DataAccess();?>
 <div class="products-box">
        <div class="container">




            <div class="row">
                <div class="col-lg-12">
                    <div class="title-all text-center">
                        <h1> Gallery</h1>
                        <p>Exceptional Taste, Exceptional Price</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="special-menu text-center">
                        <div class="button-group filter-button-group">
                            <button class="active" ><a href="seller.php" style="color:white;">All</button>
                            <button ><a href="sellerveg.php" style="color:white;">vegetables</button>
                            <button ><a href="sellerfruit.php" style="color:white;">Fruits</button>
                            
                           
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
                            <img src=<?php echo BASE_URL."uploads/".$info[$i]["veg_image"]; ?> class="img-fluid" alt="Image">
                            <div class="mask-icon">
                                <ul>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                </ul>
                                <a class="cart" href="addcart.php?id=<?= $info[$i]["vege_id"]?>">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                </div>

                <?php 
				$i++;
				} ?>

            </div>
        </div>
    </div>


    <br><br>
    <?php include("end.php")?>