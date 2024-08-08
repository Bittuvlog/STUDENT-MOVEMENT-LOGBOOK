<?php 
include('connection.php');
$id=$_REQUEST['lid'];
// echo $id;
$sql="delete from tbl_leave where leaveid='$id'";
$res=mysqli_query($con,$sql);

header('location:leave.php');

?>