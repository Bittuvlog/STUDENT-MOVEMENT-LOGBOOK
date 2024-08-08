<?php 
include('connection.php');
$id=$_REQUEST['id'];
$sql="delete from tbl_contact where id='$id'";
$res=mysqli_query($con,$sql);

header('location:mContactus.php?msg=1');

?>