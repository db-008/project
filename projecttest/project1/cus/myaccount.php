

<?php require('../config/autoload.php'); ?>
<?php
	

include("header1.php");
$dao=new DataAccess();
$name=$_SESSION['username'];
$q="select id from login where username=".$name;
$info_1=$dao->query($q);

$info=$dao->getData('*','login','id='.$_GET[$info_1]);

$elements=array(
        "username"=>$info[0]['username'],"password"=>$info[0]['password']);

	$form = new FormAssist($elements,$_POST);

$labels=array('username'=>"Student Name","password"=>"Student Age");

$rules=array(
    "username"=>array("required"=>true),
    "passord"=>array("required"=>true),


     
);
    
    
$validator = new FormValidator($rules,$labels);

if(isset($_POST["btn_update"]))
{
if($validator->validate($_POST))
{
$data=array(

        'username'=>$_POST['username'],
        'passord'=>$_POST['password'],

    );
  $condition='id='.$_GET[$info_1];

    if($dao->update($data,'student',$condition))
    {
        $msg="Successfullly Updated";
header('location:viewstudents.php');
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
	<style>
		.form{
		border:3px solid blue;
		}
	</style>
</head>
<body>


	<form action="" method="POST" >
 
<div class="row">
                    <div class="col-md-6">
Name:

<?= $form->textBox('username',array('class'=>'form-control')); ?>
<?= $validator->error('username'); ?>

</div>
</div>

<div class="row">
                    <div class="col-md-6">
Name:

<?= $form->textBox('passord',array('class'=>'form-control')); ?>
<?= $validator->error('password'); ?>

</div>
</div>






<button type="submit" name="btn_update"  >UPDATE</button>
</form>

</body>
</html>