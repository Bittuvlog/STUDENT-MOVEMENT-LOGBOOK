<?php
$aadharno=$_POST["aadharno"];
// echo $aadharno;

$name=$_POST["name"];
// echo $name;

$gender=$_POST["gender"];
// echo $gender;

$contact  =$_POST["contactno"];
// echo $contact ;

$address  =$_POST["address"];
// echo $address ;

$email  =$_POST["emailaddress"];
// echo $email ;

$password  =$_POST["password"];
// echo $password ;

include("connection.php");

// databse take database name while values takes variable name
$query="insert into tbl_gregister(aadharno,name,gender,contactno,address,email,password,date) values('$aadharno','$name' ,'$gender', '$contact' ,'$address' ,'$email' ,'$password',curdate())";

$res=mysqli_query($con,$query);
if($res){
    header('location:glogin.php?msg2=5');
}
else{
    header('location:index.php?msg2=6');   
}
?>