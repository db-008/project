<?php 

 require('../config/autoload.php'); 
include("header.php");

$file=new FileUpload();
$elements=array(
        "veg_name"=>"","veg_price"=>"","veg_image"=>"","cat"=>"");


$form=new FormAssist($elements,$_POST);



$dao=new DataAccess();

$labels=array('veg_name'=>"Item Name",'veg_price'=>"Item Price",'veg_image'=>"Item Image",'cat'=>"Category");

$rules=array(
    "veg_name"=>array("required"=>true,"minlength"=>3,"maxlength"=>30,"alphaonly"=>true),
    "veg_price"=>array("required"=>true,"minlength"=>1,"maxlength"=>10,"integeronly"=>true),
    "veg_image"=>array("filerequired"=>true),
    "cat"=>array("required"=>true)

);
    
    
$validator = new FormValidator($rules,$labels);

if(isset($_POST["insert"]))
{

if($validator->validate($_POST))
{
	
    if($fileName=$file->doUploadRandom($_FILES['veg_image'],array('.jpg','.png','.jpeg'),100000,1,'../uploads'))	
    {

$data=array(

       
        'veg_name'=>$_POST['veg_name'],
        'veg_price'=>$_POST['veg_price'],
        'cat'=>$_POST['cat'],
        'veg_image'=>$fileName
        
         
    );

   print_r($data);
  
    if($dao->insert($data,"veg"))
    {
        echo "<script> alert('New record created successfully');</script> ";

    }  
    else 
       {$msg="Registration failed";} ?>

<span style="colored:red"><?php echo $msg; ?></span>
 

<?php
    
}
else
echo $file->errors();
}

}


?>
<html>
<head>
</head>
<body>

 <form action="" method="POST" enctype="multipart/form-data">

<div class="row">
                    <div class="col-md-6">
Item Name:

<?= $form->textBox('veg_name',array('class'=>'form-control')); ?>
<?= $validator->error('veg_name'); ?>

</div>
</div>

<div class="row">
                    <div class="col-md-6">
Item Price per kg:

<?= $form->textBox('veg_price',array('class'=>'form-control')); ?>
<?= $validator->error('veg_price'); ?>

</div>
</div>

<div class="row">
                    <div class="col-md-6">
Item Image:

<?= $form->fileField('veg_image',array('class'=>'form-control')); ?>
<span style="color:red;"><?= $validator->error('veg_image'); ?></span>

</div>
</div>


<div class="row">
    <div class="col-md-6">
        Category:
        <label><input type="radio" name="cat" value="1"> Fruit</label>
        <label><input type="radio" name="cat" value="0s"> Vegetable</label>
       
        <span style="color:red;"><?php echo $validator->error('cat'); ?></span>
    </div>
</div>

<button type="submit" name="insert">Submit</button>
</form>


</body>

</html>


<?php
  include('footer.html');
  ?>