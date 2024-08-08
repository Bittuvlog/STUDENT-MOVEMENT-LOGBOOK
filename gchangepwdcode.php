<?php
session_start();
$op=$_POST['oldpassword'];
$np=$_POST['newpassword'];
$cnp=$_POST['confirmpassword'];
//$email=$_SESSION['employee'];
$email=$_SESSION['user'];
include("connection.php");
echo $query="select password from tbl_gregister where email='$email'";
$res=mysqli_query($con,$query);
if($row=mysqli_fetch_assoc($res))
{
$pp=$row['password'];
}
if($pp==$op)
{
if($op==$np)
{
//echo "no change";
header("location:gchangepwd.php?msg1=7");
}
else if($np==$cnp)
{
//echo "change hoga";
	$query2="update tbl_gregister set password='$cnp' where email='$email'";
	mysqli_query($con,$query2);
	session_destroy();
	header("location:index.php?msg1=6");
}
else{

//echo "no change";
	header("location:gChangepwd.php?msg1=8");
}
}
else{
	//echo "no change";
header("location:gChangepwd.php?msg1=9");
}
?>