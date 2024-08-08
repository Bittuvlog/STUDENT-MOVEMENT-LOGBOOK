<?php
$name=$_POST['name'];
//echo $name;
$gender=$_POST['gender'];
//echo $gender;
$address=$_POST['address'];
//echo $address;
$contactno=$_POST['contactno'];
//echo $contactno;
$email=$_POST['email'];
//echo $email;
$message=$_POST['message'];
//echo $message;
include('connection.php');
$query="insert into tbl_contact(name,gender,address,contactno,email,message,date) values('$name','$gender','$address','$contactno','$email','$message',curdate())";
$res=mysqli_query($con,$query);
if($res)
{
    header('location:index.php?msg1=3');
}
else
{
    header('location:index.php?msg1=4');
}
?>