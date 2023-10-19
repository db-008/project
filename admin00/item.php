<?php 

 require('../config/autoload.php'); 
include("header.php");

$file=new FileUpload();
$elements=array(
        "item_name"=>"","item_price"=>"","cid"=>"");


$form=new FormAssist($elements,$_POST);



$dao=new DataAccess();

$labels=array('item_name'=>"item name",'item_price'=>"item price",'cid'=>"category name");

$rules=array(
    "item_name"=>array("required"=>true,"minlength"=>2,"maxlength"=>30,"alphaspaceonly"=>true),
    "item_price"=>array("required"=>true,"minlength"=>2,"maxlength"=>20,"integeronly"=>true),
    "cid"=>array("required"=>true)
     
);
    
    
$validator = new FormValidator($rules,$labels);

if(isset($_POST["insert"]))
{

if($validator->validate($_POST))
{
	


$data=array(

       
        'item_name'=>$_POST['item_name'],
        'item_price'=>$_POST['item_price'],
        'cid'=>$_POST['cid']
        
         
    );

    print_r($data);
  
    if($dao->insert($data,"item"))
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
item name:

<?= $form->textBox('item_name',array('class'=>'form-control')); ?>
<?= $validator->error('item_name'); ?>

</div>
</div>
<div class="row">
                    <div class="col-md-6">
item price:

<?= $form->textBox('item_price',array('class'=>'form-control')); ?>
<?= $validator->error('item_price'); ?>

</div>
</div>

<div class="row">
                    <div class="col-md-6">
category id:

<?php
     $options = $dao->createOptions('cname','cid',"category");
     echo $form->dropDownList('cid',array('class'=>'form-control'),$options); ?>
<?= $validator->error('cid'); ?>

</div>
</div>

<button type="submit" name="insert">Submit</button>
</form>


</body>

</html>