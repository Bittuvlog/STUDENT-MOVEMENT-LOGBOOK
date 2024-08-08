<?php 
include('connection.php');
$id=$_REQUEST['id'];
$sql="delete from tbl_feedback where id='$id'";
$res=mysqli_query($con,$sql);

header('location:mfeedback.php?msg=1');

?>