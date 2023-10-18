<?php 


 require('../config/autoload.php'); 
include("header.php");
$file=new FileUpload();
$dao=new DataAccess();
$info=$dao->getData('*','fruits','fid='.$_GET['id']);
$file=new FileUpload();
$elements=array(
    "fname"=>$info[0]['fname'],"fprice"=>$info[0]['fprice'],"fimage"=>"");

$form=new FormAssist($elements,$_POST);



$dao=new DataAccess();

$labels=array('fname'=>"Fruit name",'fprice'=>"Fruit price",'fimage'=>"Fruit image");

$rules=array(
    "fname"=>array("required"=>true,),
    "fprice"=>array("required"=>true),
);
    
    
$validator= new FormValidator($rules,$labels);

if(isset($_POST["update"]))
{

if($validator->validate($_POST))
{
    if(isset($_FILES['fimage']['name'])){
        if($fileName=$file->doUploadRandom($_FILES['fimage'],array('.jpg','.png','.jpeg'),100000,1,'../img'))
        {
            $flag=true;
                
        }
}
$data=array(

    'fname'=>$_POST['fname'],
    'fprice'=>$_POST['fprice'],
);
$condition='fid='.$_GET['id'];
if(isset($flag))
        {	$data['fimage']=$fileName;
    
        }


if($dao->update($data,'fruits',$condition))
{
    $msg="Successfullly Updated";

}
else
    {$msg="Failed";} ?>

<span style="color:red;"><?php echo $msg; ?></span>

<?php

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

                    Fruits_image:

<?= $form->fileField('fimage',array('class'=>'form-control')); ?>
<span style="color:red;"><?= $validator->error('fimage'); ?></span>

</div>
</div>



<button type="submit" name="update">Submit</button>
</form>


</body>

</html>

