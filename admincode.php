<?php
session_start();
$email=$_POST['email'];
//echo $email;
$password=$_POST['password'];
//echo $password;
include("connection.php");
$query="select email,password from tbl_admin where email='$email' and password='$password'";
$res=mysqli_query($con,$query);
if($row=mysqli_fetch_assoc($res))
{
	$_SESSION['user']=$email;
	header('location:aprofile.php');
}else{
	header('location:admin.php?msgg=1');
	
}
?> 