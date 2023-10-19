<?php 

 require('../config/autoload.php'); 
include("header.php");

$file=new FileUpload();
$elements=array(
        "Vegetable_name"=>"","Vegetable_price"=>"");


$form=new FormAssist($elements,$_POST);



$dao=new DataAccess();

$labels=array('Vegetable_name'=>"Vegetable Name",'Vegetable_price'=>"Vegetable Price");

$rules=array(
    "Vegetable_name"=>array("required"=>true,),
    "Vegetable_price"=>array("required"=>true)
     
);
    
    
$validator = new FormValidator($rules,$labels);

if(isset($_POST["insert"]))
{

if($validator->validate($_POST))
{
	


$data=array(

       

        'Vegetable_name'=>$_POST['Vegetable_name'],
        'Vegetable_price'=>$_POST['Vegetable_price']
        
         
    );

    
  
    if($dao->insert($data,"vegetable"))


    {
        echo "<script> alert('New record created successfully');</script> ";

    }
    else
        {$msg="Registration failed";} ?>

<span style="color:red;"><?php echo $msg; ?></span>

<?php
    
}
else
echo $file->errors();
}




?>
<html>
<head>
</head>
<body>

 <form action="" method="POST" enctype="multipart/form-data">


<div class="row">
                    <div class="col-md-6">
                    Vegetable Name:

<?= $form->textBox('Vegetable_name',array('class'=>'form-control')); ?>
<?= $validator->error('Vegetable_name'); ?>

</div>
</div>
<div class="row">
                    <div class="col-md-6">
                    Vegetable Price :

<?= $form->textBox('Vegetable_price',array('class'=>'form-control')); ?>
<?= $validator->error('Vegetable_price'); ?>

</div>
</div>

<div class="row">
                    <div class="col-md-6">


<button type="submit" name="insert">Submit</button>
</form>


</body>

</html>


