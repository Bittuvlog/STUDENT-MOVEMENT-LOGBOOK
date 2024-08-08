<?php
$rollno=$_POST['rollno'];
//echo $rollno;
$name=$_POST['name'];
//echo $name;
$gender=$_POST['gender'];
//echo $gender;
$contactno=$_POST['contactno'];
//echo $contactno;

 //print_r($_FILES['image'];);

$filename=$_FILES['image']['name'];
//echo $filename;
$tmp_name=$_FILES['image']['tmp_name'];
$folder="Student/".$filename;
move_uploaded_file($tmp_name,$folder);
//echo "<img src='$folder' height='100px' width='100px'>";

$address=$_POST['address'];
//echo $address;
$email=$_POST['emailaddress'];
//echo $email;
$password=$_POST['password'];
//echo $password;
include('connection.php');
$query="insert into tbl_register(rollno,name,gender,contactno,img_source,address,email,password,date) values('$rollno','$name','$gender','$contactno','$folder','$address','$email','$password',curdate())";
$res=mysqli_query($con,$query);
if($res)
{
    header('location:register.php?msg=1');
}
else
{
    header('location:register.php?msg=2');
}
?>