

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
                        
                        <th>Id</th>
                        <th>Users</th>
                        </tr>
  
                        <?php
    
    $q="select * from login";

$info=$dao->query($q);
//print_r($info);

           $i=0;          
           while($i<count($info))
            {
                echo "<tr>";

                echo "<th>" . $info[$i]["id"] . "</th>";
                echo "<th>" . $info[$i]["username"] . "</th>";
 
                echo "</tr>";
            $i++;
            }


                    
                   
    
?>
                      
                

             
                </table>
            </div>    

            
            
            
            
        </div><!-- End row -->
    </div><!-- End container -->
    </div><!-- End container_gray_bg -->
    
    
    <?php
  include('footer.html');
  ?>