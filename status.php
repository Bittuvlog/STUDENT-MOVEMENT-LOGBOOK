<?php
$lid=$_REQUEST['lid'];
//echo $lid;
  

include("connection.php");
 $query="select s_out,out_time,s_in,in_time,date from tbl_entry where id='$lid'";
$res=mysqli_query($con,$query);

if($row=mysqli_num_rows($res)>0){
	while($row=mysqli_fetch_assoc($res)){
	?>
	<?php $s=$row['s_out'];?> 
	


	<?php
	}
}else{
	echo "No data Found";
}
?>

<?php
//echo $s;
// echo $i;

date_default_timezone_set("Asia/kolkata");
$set_date=date('d-m-Y');
	// echo $set_date;
$set_time=date('h:i:s');
// echo $set_time;

//time end code 
//Update Out time from No to Yes it means that student is out from hostels
if($s=='No')//n=not aprove
{
	$query2="update tbl_entry set s_out='Yes',out_time='$set_time',date=curdate() where id='$lid'";
	mysqli_query($con,$query2);
	header("location:gprofile.php");
}
if($s=='Yes')//aprove
{
	// $query2="update tbl_entry set s_out='N' where id='$lid'";
	// mysqli_query($con,$query2);
header("location:gprofile.php");
	
}

?> 