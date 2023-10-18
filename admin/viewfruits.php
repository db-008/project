
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
                        
                      
                        <th>Fruits Id</th>
                        <th>Fruits Name</th>
                        <th>Fruits Price</th>
                        <th>Fruits Image</th>
 
                        <th>EDIT/DELETE</th>
                     
                      
                    </tr>
<?php
    
    $actions=array(
    'edit'=>array('label'=>'Edit','link'=>'editFruits','params'=>array('id'=>'fid'),'attributes'=>array('class'=>'btn btn-success')),
    
    'delete'=>array('label'=>'Delete','link'=>'deletefruits','params'=>array('id'=>'fid'),'attributes'=>array('class'=>'btn btn-success'))
    
    );

    $config=array(
        'srno'=>true,
        'hiddenfields'=>array('fid'),
        "images"=>array(array('field'=>'fimage','path'=>'../img/','attributes'=>array('height'=>100)))
        
        
    );

   
   $join=array(
        
    );
     $fields=array('fid','fname','fprice','fimage');

    $users=$dao->selectAsTable($fields,'fruits','status=1',$join,$actions,$config);
    
    echo $users;
                    
                    
                   
    
?>
             
                </table>
            </div>    

            
            
            
            
        </div><!-- End row -->
    </div><!-- End container -->
    </div><!-- End container_gray_bg -->
    
    
