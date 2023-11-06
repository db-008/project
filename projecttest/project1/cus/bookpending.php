
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
            <h1 style="margin-top:30px;"><center><b>Booking pendings</b></center></h1>
                <table  border="1" class="table" style="margin-top:30px;">
                    <tr>
                       
                        
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
        
        'delete'=>array('label'=>'Cancel','link'=>'cancel2.php','params'=>array('id'=>'bid'),'attributes'=>array('class'=>'btn btn-success'))
    );

    $config=array(
        'srno'=>true,
        'hiddenfields'=>array('bid'),

    );

    $condition=" uemail='".$name."' and status=4";
    $join=array(
       
    ); 
     $fields=array('bid','uemail','iid','iname','price','quantity','totalprice','bookingdate','orderdate');

    $users=$dao->selectAsTable($fields,'booking as b',$condition,NULL,$actions,$config);
    echo $users;


 
      

                   
    
?>

                </table>
                <?php           
                 $q="select * from booking where uemail='".$name."' and status=4";
                 $info=$dao->query($q);
                 $i=0;       
                 $totall = 0;  
                 while($i<count($info))
                    {
                 $totall = $totall + $info[$i]["totalprice"];
                    
                $i++;
                    }
                 ?>
    TOTAL AMOUNT:
    <input type="text" value="<?php echo $totall; ?>" readonly name="total"/> 
            </div>    

            
            
            
            
        </div><!-- End row -->
    </div><!-- End container -->
    </div><!-- End container_gray_bg -->
    
    
    <br><br>
    <?php include("end.php")?>