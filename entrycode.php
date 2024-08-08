<?php
session_start();
   $name=$_POST['name'];
//    echo $name;

   $branch=$_POST['branch'];
//    echo $branch;

   $year=$_POST['year'];
//    echo $year;

   $place=$_POST['place'];
//    echo $place;

$email=$_SESSION['user'];
// echo $email;

date_default_timezone_set("Asia/kolkata");
$set_date=date('d-m-Y');
	// echo $set_date;
$set_time=date('h:i:s');
// echo $set_time;

include("connection.php");
$query="select * from tbl_register where email='$email'";
$res=mysqli_query($con,$query);
if($row=mysqli_fetch_assoc($res))
{
$uid=$row['id'];
// echo $uid;

}
 $query2="insert into tbl_entry(stuid,name,branch,year,place,s_out,out_time,s_in,in_time,date) values('$uid','$name','$branch','$year','$place','No','$set_time','No','$set_time',curdate())";
 mysqli_query($con,$query2);
  header("location:sprofile.php?msg=1");

?>