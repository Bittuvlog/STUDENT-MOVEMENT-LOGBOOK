<?php
$id=$_REQUEST['lid'];
// echo $id;
include("connection.php");
 $query="select s_out,out_time,s_in,in_time,date from tbl_entry where id='$id'";
$res=mysqli_query($con,$query);

if($row=mysqli_num_rows($res)>0){
	while($row=mysqli_fetch_assoc($res)){
	?>
	
	<?php $i=$row['s_in'];?>

 
	<?php
	}
}else{
	echo "No data Found";
}
?>
<?php
date_default_timezone_set("Asia/kolkata");
$set_date=date('d-m-Y');
	// echo $set_date;
$set_time=date('h:i:s');
// echo $set_time;

if($i=='No')//n=not aprove
{
	$query3="update tbl_entry set s_in='Yes',in_time='$set_time' where id='$id'";
	mysqli_query($con,$query3);
	header("location:gprofile.php");
}
//echo $s;
if($i=='Yes')//aprove
{
	// $query2="update tbl_entry set s_out='N' where id='$lid'";
	// mysqli_query($con,$query2);
header("location:gprofile.php");
	
}

// header("location:department.php");
?>