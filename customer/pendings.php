
<?php require('../config/autoload.php'); ?>

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
                    <h2>Booking Pendings</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Shop</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    
    <div class="container_gray_bg" id="home_feat_1">
    <div class="container">
    	<div class="row">
            <div class="col-md-12">
                <table  border="1" class="table" style="margin-top:100px;">
                    <tr>
                        
                        <th>srno</th>
                        <th>uemail</th>
                        <th>iid</th>
                        <th>iname</th>
                        <th>price</th>
                       
                        <th>quantity</th>
                        <th>totalprice</th>
                        <th>bookingdate</th>
                   
                        <th>orderstatus</th>
                      
                        

                    </tr>
<?php
    
    $actions=array(
       

    );

    $config=array(
        'srno'=>true,
        'hiddenfields'=>array('bid'),

    );

    $condition=" uemail='".$name."' and status=4";
    $join=array(
       
    ); 
     $fields=array('bid','uemail','iid','iname','price','quantity','totalprice','bookingdate','orderstatus');

    $users=$dao->selectAsTable($fields,'booking as b',$condition,NULL,$actions,$config);
    
    echo $users;
                    
                    
                   
    
?>
             
                </table>
       
            </div>    

            
        <form action="" method="POST" enctype="multipart/form-data">

<button class="btn btn-success" type="submit" style="margin-right: 2px;"  name="book" ><a href="home.php">Cancel</button>

</form>    
            
            
        </div><!-- End row -->
    </div><!-- End container -->
    </div><!-- End container_gray_bg -->
    
    
