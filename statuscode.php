<?php
$lid=$_REQUEST['lid'];
//echo $lid;
include("connection.php");
$query="select status from tbl_leave where leaveid='$lid'";
$res=mysqli_query($con,$query);

if($row=mysqli_num_rows($res)>0){
	while($row=mysqli_fetch_assoc($res)){
	?>
	<?php $s=$row['status'];
    //echo $s;
    ?>
	

	<?php
	}
}else{
	echo "No data Found";
}

if($s=='No')//n=not aprove
{
	$query2="update tbl_leave set status='Yes' where leaveid='$lid'";
	mysqli_query($con,$query2);
	header("location:leave.php");
}
if($s=='Yes')//aprove
{
	$query2="update tbl_leave set status='No' where leaveid='$lid'";
	mysqli_query($con,$query2);
	header("location:leave.php");
	
}

?>