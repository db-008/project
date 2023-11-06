
<?php require('../config/autoload.php'); ?>

<?php
$dao=new DataAccess();

$name=$_SESSION['username'];

?>
<?php include('headerwish.php'); ?>

    
    <div class="container_gray_bg" id="home_feat_1">
    <div class="container">
    	<div class="row">
            <div class="col-md-12">
                <table  border="1" class="table" style="margin-top:100px;">
                    <tr>
                        <h1><center> BOOKING VIEW</center></h1>
                        
                        <th>srno</th>
                        <th>username</th>
                        <th>iid</th>
                        <th>Itemname</th>
                        <th>price</th>
                       
                        <th>quantity</th>
                        <th>totalprice</th>
                        <th>bookingdate</th>
                        <th>orderdate</th>
                      
                        

                    </tr>
<?php
    
    $actions=array(
        
        'delete'=>array('label'=>'Delete','link'=>'cancel.php','params'=>array('id'=>'bid'),'attributes'=>array('class'=>'btn btn-success'))
    );

    $config=array(
        'srno'=>true,
        'hiddenfields'=>array('bid'),

    );

    $condition=" uemail='".$name."' and status=3";
    $join=array(
       
    ); 
     $fields=array('bid','uemail','iid','iname','price','quantity','totalprice','bookingdate','orderdate');

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
                 $totall = $totall + $info[$i]["totalprice"];
                    
                $i++;
                    }
                    $_SESSION['totall']=$totall;
                 ?>
    TOTAL AMOUNT:
    <input type="text" value="<?php echo $totall; ?>" readonly name="total"/> 
    <button class="btn btn-success" type="submit" name="Pay All"><a href="payment.php">payment</button>
    <?php
                 }
                else
                {
                    echo "no items";
                    echo "\n";
                }
                
                 ?>
                
                <button class="btn btn-success" type="submit" name="Add new Item"><a href="seller.php">Cancel</button>
                
            </div>    

            
            
            
            
        </div><!-- End row -->
    </div><!-- End container -->
    </div><!-- End container_gray_bg -->
    
    
