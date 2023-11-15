<!DOCTYPE html>
<html lang="en">
<head>
<?php include("dbcon.php"); 
session_start();
?>
	<script type="text/javascript">
function validations() {
    var name = document.getElementById("Cname");
    if (name.value == "") {
        alert("Enter Card Holder Name...");
        name.focus();
        return false;
    }

    var mm = document.getElementById("date");
    if (mm.value == "" || mm.value.length !== 2 || isNaN(mm.value)) {
        alert("Enter a valid Card Month (MM)");
        mm.focus();
        return false;
    }

    var yy = document.getElementById('Cyy');
    if (yy.value == '' || yy.value.length !== 2 || isNaN(yy.value)) {
        alert('Enter a valid Card Year (YY)');
        yy.focus();
        return false;
    } else {
        var currentYear = new Date().getFullYear(); // Get the current year
        var enteredYear = parseInt('20' + yy.value); // Assuming years are 20XX format

        if (enteredYear < currentYear) {
            alert('Please enter a year that is not in the past.');
            yy.focus();
            return false;
        }
    }

    var cvv = document.getElementById("verification");
    if (cvv.value == "" || cvv.value.length !== 3 || isNaN(cvv.value)) {
        alert("Enter a valid Card CVV / CVC");
        cvv.focus();
        return false;
    }

    var cardNumber = document.getElementById("cardnumber");
    if (cardNumber.value == "" || cardNumber.value.length !== 16 || isNaN(cardNumber.value)) {
        alert("Enter a valid 16-digit Card Number");
        cardNumber.focus();
        return false;
    }

    var address = document.getElementById("add");
    if (address.value == "") {
        alert("Enter Delivery Address");
        address.focus();
        return false;
    }
}
</script>

	
  <meta charset="UTF-8">
  <title>Document</title>
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
  <link rel="stylesheet" href="payment/style.css">
<meta name="robots" content="noindex,follow" />
</head>
<body>


<?php
if(isset($_POST["next"]))
{
	
	 header('location:printbill.php');
	
	 }


	
//onSubmit="return validations()" 
?>
	<form action=""  method="POST" onSubmit="return validations();"   enctype="multipart/form-data">
  <div class="checkout-panel">
    <div class="panel-body">
      <h2 class="title"><b>CHECKOUT</h2>

      <div class="progress-bar">
        <div class="step active"></div>
        <div class="step active"></div>
        <div class="step"></div>
        <div class="step"></div>
      </div>
   <?php
		//session_start();
		 $name=$_SESSION['username'] ;
		 echo $name;
		 ?>


      <div class="payment-method">
        <label for="card" class="method card">
     
		 
          <div class="card-logos">
            <img src="payment/img/visa_logo.png"/>
            <img src="payment/img/mastercard_logo.png"/>
          </div>
<?php 
//session_start();
//$amt=1000;
$amt= $_SESSION['totall'];
  $name=$_SESSION['username']  ;
?>
          <div class="radio-input">
            <input id="card" type="radio" name="payment">
            Pay Rs.<?php echo $amt;?> with credit card
          </div>
        </label>

        <label for="paypal" class="method paypal">
          <img src="payment/img/paypal_logo.png"/>
          <div class="radio-input">
            <input id="paypal" type="radio" name="payment">
             Pay Rs.<?php echo $amt;?> with pay pal
          </div>
        </label>
      </div>

      <div class="input-fields">
        <div class="column-1">
          <label for="cardholder">Cardholder's Name</label>
          <input type="text" name="Cname" id="Cname" />

          <div class="small-inputs">
            <div>
              <label for="date">Valid thru</label>
              <input type="text" id="date" name="Cmm" placeholder="MM " /> 
	      <input type="text" id="Cyy" placeholder= "YY" />

            </div>



            <div>
              <label for="verification">CVV / CVC *</label>
              <input type="password" name="cvv" id="verification"/>
            </div>
          </div>

        </div>
        <div class="column-2">
          <label for="cardnumber">Card Number</label>
          <input type="password" name="Cnum"id="cardnumber"/>

          <span class="info">* CVV or CVC is the card security code, unique three digits number on the back of your card separate from its number.</span>

	<label for="address">Delivery Address</label>
          <input type="text" name="add"id="add"/>

        </div>
      </div>
    </div>

    <div class="panel-footer">
      <button class="btn back-btn">Back</button>
     <button  type="submit" class="btn next-btn"  name="next" >Next Step </button>
     
		 
		
    </div>
  </div>
	</form>
	
	
	
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="payment/script.js"></script>
  
</body>
</html>