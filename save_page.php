<?php
session_start();
require ('dbconfig.php');

    $name=$_REQUEST['name'];
	$email=$_REQUEST['email'];
	$phone=$_REQUEST['phone'];
	$subject=$_REQUEST['subject'];
	$message=$_REQUEST['message'];
	
	
 $sql="INSERT INTO `contacts`( `name`, `email`,`phone`, `subject`, `message`) 
 VALUES ('$name','$email','$phone','$subject','$message')";
if($conn->query($sql)==TRUE)
{
 echo "<script> alert('Added Successfully...! '); </script>";
 echo "<script type='text/javascript'>window.location.href = 'index.php';</script>";
}
else
	{
echo "Error: ".$sql."<br>".$conn->error;
}
?>

