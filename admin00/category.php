<?php 

 require('../config/autoload.php'); 
include("header.php");

$file=new FileUpload();
$elements=array("cname"=>"");


$form=new FormAssist($elements,$_POST);



$dao=new DataAccess();

$labels=array('cname'=>"category name");

$rules=array(
    "cname"=>array("required"=>true,"minlength"=>2,"maxlength"=>30,"alphaspaceonly"=>true)
     
);
    
    
$validator = new FormValidator($rules,$labels);

if(isset($_POST["insert"]))
{

if($validator->validate($_POST))
{
	


$data=array(

       
        'cname'=>$_POST['cname'],


        
         
    );

    print_r($data);
  
    if($dao->insert($data,"category"))
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
category name:

<?= $form->textBox('cname',array('class'=>'form-control')); ?>
<?= $validator->error('cname'); ?>

</div>
</div>
<div class="row">
                    <div class="col-md-6">

<button type="submit" name="insert">Submit</button>
</form>


</body>

</html>