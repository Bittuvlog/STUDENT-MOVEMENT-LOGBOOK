<?php
session_start();
$emaill=$_POST['email'];
// echo $emaill;
$password=$_POST['password'];
// echo $password

include("connection.php");

$query="select email,password from tbl_gregister where email='$emaill' and password='$password' ";

$res=mysqli_query($con,$query);
if($row=mysqli_fetch_assoc($res)){
    // echo$row;
    $_SESSION['user']=$emaill;
    header('location:gprofile.php');
}
else{
    header('location:glogin.php?msgg=1');

}

?>