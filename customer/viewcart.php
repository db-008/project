
<?php require('../config/autoload.php'); ?>

<?php
$dao=new DataAccess();

$name=$_SESSION['username'];

?>
<?php include('afterlogin.php'); ?>

    
    <div class="container_gray_bg" id="home_feat_1">
    <div class="container">
    	<div class="row">
            <div class="col-md-12">
                <table  border="1" class="table" style="margin-top:100px;">
                    <tr>
                        <h1><center> CART VIEW</center></h1>
                        
                        <th>srno</th>
                        <th>uemail</th>
                        <th>iid</th>
                        <th>iname</th>
                        <th>price</th>
                       
                        <th>quantity</th>
                        <th>totalprice</th>
                        <th>bookingdate</th>
                        <th>orderdate</th>
                      
                        

                    </tr>
<?php
    
    $actions=array(
        'edit'=>array('label'=>'booking','link'=>'booking.php','params'=>array('id'=>'bid'),'attributes'=>array('class'=>'btn btn-success')),
        'delete'=>array('label'=>'Delete','link'=>'delete.php','params'=>array('id'=>'bid'),'attributes'=>array('class'=>'btn btn-success'))
    );

    $config=array(
        'srno'=>true,
        'hiddenfields'=>array('bid'),

    );

    $condition=" uemail='".$name."' and status=1";
    $join=array(
       
    ); 
     $fields=array('bid','uemail','iid','iname','price','quantity','totalprice','bookingdate','orderdate');

    $users=$dao->selectAsTable($fields,'booking as b',$condition,NULL,$actions,$config);
    
    echo $users;
                    
                    
                   
    
?>
             
                </table>
                <?php
           $q="select * from booking where status=1";
           $info=$dao->query($q);
           $i=0;
           $totall=0;
           while($i<count($info))
           {
            $totall = $totall + $info[$i]["totalprice"];
            $i++;
           
           }
           ?>
           Total Price :
           <input type="text"  value=" <?php echo $totall; ?>" readonly name="total" />
           



            
        <form action="" method="POST" enctype="multipart/form-data">

<button class="btn btn-success" type="submit"  name="home" ><a href="viewbooking.php">View Booking</button>
<button class="btn btn-success" type="submit" style="margin-right: 2px;"  name="book" ><a href="home.php">Shop New Item</button>

</form>    
            
            
        </div><!-- End row -->
    </div><!-- End container -->
    </div><!-- End container_gray_bg -->
    
    
