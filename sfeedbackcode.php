<?php
session_start();
$feedback=$_POST['feedbacktext'];
//echo $feedback;
$email=$_SESSION['user'];
//echo $email;
include("connection.php");
$query="select * from tbl_register where email='$email'";
$res=mysqli_query($con,$query);
if($row=mysqli_fetch_assoc($res))
{ 
$uid=$row['id'];
//echo $uid;
}
$query="insert into tbl_feedback(stuid,feedback,date) values('$uid','$feedback',curdate())";
$res=mysqli_query($con,$query);
if($res)
{
    header('location:sfeedback.php?msg=1');
} 
?>