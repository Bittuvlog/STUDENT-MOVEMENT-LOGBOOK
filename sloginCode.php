<?php
session_start();
$email=$_POST['email'];
//echo $email;
$password=$_POST['password'];
//echo $password;
include("connection.php");
$query="select email,password from tbl_register where email='$email' and password='$password'";
$res=mysqli_query($con,$query);
if($row=mysqli_fetch_assoc($res))
{
	$_SESSION['user']=$email;
	header('location:sprofile.php');
}else{
	header('location:slogin.php?msgg=1');
	
}
?> 