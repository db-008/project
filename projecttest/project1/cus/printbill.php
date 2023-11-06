
<script>
function printData()
{
   var divToPrint=document.getElementById("printTable");
   newWin= window.open("");
   newWin.document.write(divToPrint.outerHTML);
   newWin.print();
   newWin.close();
}
</script>

<?php  
 //session_start();
include("dbcon.php");
require('../config/autoload.php');
$dao=new DataAccess();

?>
<!-- Your HTML Code -->
<link rel="stylesheet" type="text/css" href="style.css">
<!-- Remaining HTML Code -->

<div class="row">
 <div class="col-md-12">
 <div class="table-responsive">
                                <table border="1"  id="printTable" style="width:100%" >
                                    <thead>
                          <center> star </center>
                           <center> Angamaly </center>
                            <tr>
                             <th style="text-align:left">BillNo.1</th>
                               <th colspan="2" style="text-align:left"></th>
                              <th style="text-align:left" >Date:<?php echo  date("Y/m/d"); ?></th>
                            </tr>
                            </thead>
                           <tr>
                        <th>Username</th>
                        <th>item name</th>        
		               	<th>quantity</th>
                        <th>Total price</th>
                           </tr>                  
                                    
                                    <tbody>
                                   
 <?php
$name=$_SESSION['username'] ;

 

$sql = "SELECT * FROM booking WHERE status=3 and uemail='$name'";
$result = $conn->query($sql);


	
	
	
	


if ($result->num_rows > 0) {


 // output data of each row
    while($row = $result->fetch_assoc()) {
		
		
      echo "<tr> <td> "  . $row["uemail"]. "</td> <td>"  . $row["iname"]. "</td> <td>" . $row["quantity"]. "</td>  <td>" . $row["totalprice"]. "</td>";
	  
	    
}
}


 ?>




</table>



<?php


$sql11 =" UPDATE booking SET status=4 WHERE status=3 and umail='$name'" ;

if ($conn->query($sql11) === TRUE) {
	echo "<script> alert('Payment Sucessfully');</script> ";
	 
	
	 }
	 ?>
     <br /><br />

<input type="button" onclick="printData();" value="PRINT"  />

<a href="payadd.php">HOME</a>
</div>
</div>
</div>

</form>




