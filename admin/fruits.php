<?php 

 require('../config/autoload.php'); 
include("header.php");

$file=new FileUpload();
$elements=array(
        "fname"=>"","fprice"=>"","fimage"=>"");


$form=new FormAssist($elements,$_POST);



$dao=new DataAccess();

$labels=array('veg_name'=>"vegetable name",'veg_price'=>"vegetable price",'veg_image'=>"vegetable image");

$rules=array(
    "fname"=>array("required"=>true,),
    "fprice"=>array("required"=>true),
    "fimage"=>array("filerequired"=>true) 
);
    
    
$validator= new FormValidator($rules,$labels);

if(isset($_POST["insert"]))
{

if($validator->validate($_POST))
{
	
    if($fileName=$file->doUploadRandom($_FILES['fimage'],array('.jpg','.png','.jpeg'),100000,1,'../img'))	
    {


$data=array(

       

        'fname'=>$_POST['fname'],
        'fprice'=>$_POST['fprice'],
        'fimage'=>$fileName
         
    );

  
  
    if($dao->insert($data,"fruits"))


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
                    Fruits_Name:

<?= $form->textBox('fname',array('class'=>'form-control')); ?>
<?= $validator->error('fname'); ?>

</div>
</div>
<div class="row">
                    <div class="col-md-6">
                    Fruits_Price :

<?= $form->textBox('fprice',array('class'=>'form-control')); ?>
<?= $validator->error('fprice'); ?>

</div>
</div>

<div class="row">
                    <div class="col-md-6">

                    Fruits_Image:

<?= $form->fileField('fimage',array('class'=>'form-control')); ?>
<span style="color:red;"><?= $validator->error('fimage'); ?></span>

</div>
</div>



<button type="submit" name="insert">Submit</button>
</form>


</body>

</html>

