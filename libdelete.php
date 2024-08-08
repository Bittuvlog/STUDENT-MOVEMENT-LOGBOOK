<?php
$id=$_REQUEST['lid'];
//echo $id;
include("connection.php");
$query="delete from tbl_leave where id='$id'";
mysqli_query($con,$query);
header('location:leave.php');

?>