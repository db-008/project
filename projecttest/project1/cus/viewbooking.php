
<?php require('../config/autoload.php'); ?>

<?php
$dao=new DataAccess();

$name=$_SESSION['username'];

?>
<?php
if(isset($_SESSION['username']))
{
    include("headerwish.php");
}
else 
{ 
    header('location:login.php');
}
?>

    
    <div class="container_gray_bg" id="home_feat_1">
    <div class="container">
    	<div class="row">
            <div class="col-md-12">
            <h1 style="margin-top:30px;"><center><b> WISHLIST</b></center></h1>
                <table  border="1" class="table" style="margin-top:30px;">
                    <tr>
                        
                        
                        <th>srno</th>
                        <th>username</th>
                        <th>Itemname</th>
                        <th>price</th>
                       
                        <th>quantity</th>
                        <th>totalprice</th>
                        <th>bookingdate</th>
                        <th>orderdate</th>
                      
                        

                    </tr>
<?php
    
    $actions=array(
        'edit'=>array('label'=>'book','link'=>'catbook.php','params'=>array('id'=>'bid'),'attributes'=>array('class'=>'btn btn-success')),
        'delete'=>array('label'=>'Delete','link'=>'catdelete.php','params'=>array('id'=>'bid'),'attributes'=>array('class'=>'btn btn-success'))
    );

    $config=array(
        'srno'=>true,
        'hiddenfields'=>array('bid'),

    );

    $condition=" uemail='".$name."' and status=1";
    $join=array(
       
    ); 
     $fields=array('bid','uemail','iname','price','quantity','totalprice','bookingdate','orderdate');

    $users=$dao->selectAsTable($fields,'booking as b',$condition,NULL,$actions,$config);
    
    echo $users;
                    
                    
                   
    
?>
             
                </table>
                <?php           
                 $q="select * from booking where uemail='".$name."' and status=1";
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
                    ?>
                        TOTAL AMOUNT:
    <input type="text" value="<?php echo $totall; ?>" readonly name="total"/> 
    
    <?php
                 }
                else
                {
                    echo "no items";
                    echo "\n";
                }
                
                 ?>
                
                <button class="btn btn-success" type="submit" name="Pay All"><a href="viewbookingnext.php">next</button>
                <button class="btn btn-success" type="submit" name="Add new Item"><a href="seller.php">Add New Item</button>
                           

            </div>    

            
            
            
            
        </div><!-- End row -->
    </div><!-- End container -->
    </div><!-- End container_gray_bg -->
    
    <br><br>
    <?php include("end.php")?>