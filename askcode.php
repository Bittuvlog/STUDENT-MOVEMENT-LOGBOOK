<?php
session_start();
$f=$_POST['a'];
//echo $f; 
$date=$_POST['date'];
//echo $date;
$r=$_POST['reason'];
//echo $r;
$email=$_SESSION['user'];
//echo $email;
include("connection.php");
$query="select * from tbl_register where email='$email'";
$res=mysqli_query($con,$query);
if($row=mysqli_fetch_assoc($res))
{ 
$uid=$row['id'];
echo $uid;
}
$query2="insert into tbl_leave(stuid,dfrom,dto,reason,status,doa) values('$uid','$f','$date','$r','No',curdate())";
mysqli_query($con,$query2);
header("location:sprofile.php");


?>
