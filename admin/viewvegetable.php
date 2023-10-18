
<?php require('../config/autoload.php'); ?>

<?php
$dao=new DataAccess();



?>
<?php include('header.php'); ?>

    
    <div class="container_gray_bg" id="home_feat_1">
    <div class="container">
    	<div class="row">
            <div class="col-md-12">
                <table border="1" class="table" style="margin-top:100px;">
                    <tr>
                        
                      
                        <th>Vegetable Id</th>
                        <th>Vegetable Name</th>
                        <th>Vegetable Price</th>
                        <th>Vegetable Image</th>
 
                        <th>EDIT/DELETE</th>
                     
                      
                    </tr>
<?php
    
    $actions=array(
    'edit'=>array('label'=>'Edit','link'=>'editvegetable.php','params'=>array('id'=>'Veg_id'),'attributes'=>array('class'=>'btn btn-success')),
    
    'delete'=>array('label'=>'Delete','link'=>'deleteveg.php','params'=>array('id'=>'Veg_id'),'attributes'=>array('class'=>'btn btn-success'))
    
    );

    $config=array(
        'srno'=>true,
        'hiddenfields'=>array('Veg_id'),
        "images"=>array(array('field'=>'veg_image','path'=>'../img/','attributes'=>array('height'=>100)))
        
        
    );

   
   $join=array(
        
    );
     $fields=array('Veg_id','Veg_name','Veg_price','veg_image');

    $users=$dao->selectAsTable($fields,'veg','status=1',$join,$actions,$config);
    
    echo $users;
                    
                    
                   
    
?>
             
                </table>
            </div>    

            
            
            
            
        </div><!-- End row -->
    </div><!-- End container -->
    </div><!-- End container_gray_bg -->
    
    
