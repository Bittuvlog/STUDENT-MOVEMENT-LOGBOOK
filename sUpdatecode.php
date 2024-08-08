<?php
//print_r($_POST);
$id=$_POST['id'];
//echo $id;
$rollno=$_POST['rollno'];
echo $rollno;
$name=$_POST['name'];
echo $name;
$contactno=$_POST['contactno'];
echo $contactno;
$address=$_POST['address'];
echo $address;
include("connection.php");
$query="update tbl_register set rollno='$rollno',name='$name',contactno='$contactno',address='$address' where id='$id'";
$res=mysqli_query($con,$query);
if($res)
{
	header('location:mStudent.php?mg=4');
}
else
{
	header('location:mStudent.php?mg=5');
}
?>
