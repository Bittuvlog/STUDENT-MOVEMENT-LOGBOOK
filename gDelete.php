<?php
$id=$_REQUEST['id'];
//echo $id;
include("connection.php");
$query="delete from tbl_gregister where id='$id'";
mysqli_query($con,$query);
header('location:mGaurd.php');

?>