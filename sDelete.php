<?php
$id=$_REQUEST['id'];
//echo $id;
include("connection.php");
$query="delete from tbl_register where id='$id'";
mysqli_query($con,$query);
header('location:mStudent.php');

?>