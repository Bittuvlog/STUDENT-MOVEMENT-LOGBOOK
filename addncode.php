<?php
$notice=$_POST['notice'];
//echo $notice;

include("connection.php");
$query="insert into tbl_noti(notice,date) values('$notice',curdate())";
mysqli_query($con,$query);
header("location:aprofile.php");
?>
		
		