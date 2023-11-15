
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
                    <h2>Cart</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Shop</a></li>
                        <li class="breadcrumb-item active">Cart</li>
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
                        <th>Actions</th>
                        
                      
                        

                    </tr>
<?php
    
    $actions=array(
       
        'delete'=>array('label'=>'Delete','link'=>'delete.php','params'=>array('id'=>'bid'),'attributes'=>array('class'=>'btn btn-success'))
    );

    $config=array(
        'srno'=>true,
        'hiddenfields'=>array('bid'),

    );

    $condition=" uemail='".$name."' and status=3";
    $join=array(
       
    ); 
     $fields=array('bid','uemail','iid','iname','price','quantity','totalprice','bookingdate');

    $users=$dao->selectAsTable($fields,'booking as b',$condition,NULL,$actions,$config);
    
    echo $users;
                    
                    
                   
    
?>
             
                </table>
                <?php
                $q="select * from booking where uemail='".$name."' and status=3";
                $info=$dao->query($q);
                $i=0;
                $totall = 0;
                if($info)
                {
                while($i<count($info))
                {
                    $totall = $totall +  $info[$i]["totalprice"];
                
                $i++;
            }
            $_SESSION["totall"]=$totall;
            ?>
              TOTAL PRICE :
         <input type = "text" value="<?php echo $totall; ?>" readonly name="total"/>  
         <?php 
                }
                else
                {
                    echo "no items";

                }  
         
         
            ?>
       
            </div>    

            
            <form action="" method="POST" enctype="multipart/form-data">
    <button class="btn btn-success" type="submit" name="home" style="margin-top: 10px;">
        <a href="payment.php">Payment</a>
    </button>
    <button class="btn btn-success" type="submit" name="book" style="margin-top: 10px; margin-right: 2px;">
        <a href="home.php">Back to Home</a>
    </button>
</form>   
            
            
        </div><!-- End row -->
    </div><!-- End container -->
    </div><!-- End container_gray_bg -->
    
    
