<?php 

 require('../config/autoload.php'); 
include("header.php");

$file=new FileUpload();
$elements=array(
        "veg_name"=>"","veg_price"=>"","vimg"=>"");


$form=new FormAssist($elements,$_POST);



$dao=new DataAccess();

$labels=array('veg_name'=>"vegetable name",'veg_price'=>"vegetable price",'vimg'=>"vegetable image");

$rules=array(
    "veg_name"=>array("required"=>true),
    "veg_price"=>array("required"=>true),
    "vimg"=>array("filerequired"=>true) 
);
    
    
$validator= new FormValidator($rules,$labels);

if(isset($_POST["insert"]))
{

if($validator->validate($_POST))
{
	
    if($fileName=$file->doUploadRandom($_FILES['vimg'],array('.jpg','.png','.jpeg'),100000,1,'../img'))	
    {


$data=array(

       

        'veg_name'=>$_POST['veg_name'],
        'veg_price'=>$_POST['veg_price'],
        'vimg'=>$fileName
         
    );

    
  
    if($dao->insert($data,"veg"))


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

<?= $form->textBox('veg_name',array('class'=>'form-control')); ?>
<?= $validator->error('veg_name'); ?>

</div>
</div>
<div class="row">
                    <div class="col-md-6">
                    Vegetable Price :

<?= $form->textBox('veg_price',array('class'=>'form-control')); ?>
<?= $validator->error('veg_price'); ?>

</div>
</div>

<div class="row">
                    <div class="col-md-6">

                    Vegetable_image:

<?= $form->fileField('vimg',array('class'=>'form-control')); ?>
<span style="color:red;"><?= $validator->error('vimg'); ?></span>

</div>
</div>



<button type="submit" name="insert">Submit</button>
</form>


</body>

</html>

