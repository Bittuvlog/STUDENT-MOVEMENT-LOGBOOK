<?php 
include('connection.php');
$id=$_REQUEST['id'];
echo $id;
$sql="delete from tbl_noti where notid='$id'";
$res=mysqli_query($con,$sql);

header('location:aprofile.php');

?>