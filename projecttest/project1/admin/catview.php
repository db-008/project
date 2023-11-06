
<?php require('../config/autoload.php'); ?>

<?php
$dao=new DataAccess();



?>
<?php include('header.php'); ?>
    <div class="container_gray_bg" id="home_feat_1">
    <div class="container">
    	<div class="row">
            <div class="col-md-12">
                <table  border="1" class="table" style="margin-top:100px;">
          
                    <tr>
                        
                        <th>vege Id</th>
                        <th>Vegetable name</th>
                        <th>Vegetable Price per kg</th>
                        <th>Vegetable image</th>
                        <th>EDIT/DELETE</th>
                     
                      
                    </tr>
<?php
    
    $actions=array(
    'edit'=>array('label'=>'Edit','link'=>'catedit.php','params'=>array('id'=>'vege_id'),'attributes'=>array('class'=>'btn btn-success')),
    'delete'=>array('label'=>'Delete','link'=>'catdelete.php','params'=>array('id'=>'vege_id'),'attributes'=>array('class'=>'btn btn-success'))
    
    );

    $config=array(
        'srno'=>true,
        'hiddenfields'=>array('vege_id'),
        "images"=>array(array('field'=>'veg_image','path'=>'../uploads/','attributes'=>array('height'=>100)))
        
        
    );

   
   $join=array(
        
    );
     $fields=array('vege_id','veg_name','veg_price','veg_image');

    $users=$dao->selectAsTable($fields,'veg','status=1 AND cat=0',$join,$actions,$config);
    
    echo $users;
                    
                    
                   
    
?>
             
                </table>
            </div>    

            
            
            
            
        </div><!-- End row -->
    </div><!-- End container -->
    </div><!-- End container_gray_bg -->
    
    
    <?php
  include('footer.html');
  ?>