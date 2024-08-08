<?php
session_start();
$email=$_SESSION['user'];
//echo $email;
if($_SESSION['user']=="") 
{
	session_destroy();
	echo "<script>window.location.href='admin.php?msgg=3';</script>";
}

if(isset($_REQUEST['message']))
{
	$id=$_REQUEST['message'];
	if($id==3)
	{
		echo "<script> alert('Data is deleted'); </script>";
	}
	else
	{
		echo "<script> alert('Data is not deleted'); </script>";
	}
}

if(isset($_REQUEST['mg']))
{
	$id=$_REQUEST['mg'];
	if($id==4)
	{
		echo "<script> alert('Data is updated'); </script>";
	}
	else
	{
		echo "<script> alert('Data is not updated'); </script>";
	}
}

include("GenParent.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <!-- Start Menu--> 
    <div class="row" style="margin-top:10px;min-height:50px;">
        <div class="col-sm-12">
      <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light container mx-auto" id="p">
        <a class="navbar-brand" href="aprofile.php">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample09">
          <ul class="navbar-nav nav-fill w-100">
            <li class="nav-item active">
              <a class="nav-link" href="register.php">Registration<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
        <a class="nav-link" href="mStudent.php">Manage Student</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="mGaurd.php">Manage Gaurd </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="mContactus.php">Contact Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="mfeedback.php">Feedback</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="achangepwd.php">Change Password</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="alogout.php">Logout</a>
      </li>
          </ul>
        </div>
      </nav>
</div>
</div>
    <!-- End Menu-->

<!-- Start Main -->


<table class="table">
  <thead class="black white-text">
    <tr>
      <th scope="col">Sr.No</th>
      <th scope="col">Images</th>
      <th scope="col">Gaurd Id</th>
      <th scope="col">Name</th>
      <th scope="col">Gender</th>
      <th scope="col">Contact No </th>
      <th scope="col">Address </th>
      <th scope="col">Email</th>
      <th scope="col">Date</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
<?php
include('connection.php');
$a=1;
		$sql="select * from tbl_gregister";
		$res=mysqli_query($con,$sql);
		if(mysqli_num_rows($res)>0){
			while($row=mysqli_fetch_assoc($res)){
				?>
				<tr>
					<td><?php echo $a;?></td>
          <td><img src="<?php echo $row['img_source'];?>" height="35px" width="40px"></td>
                    <td><?php echo $row['gid'];?></td>
					<td><?php echo $row['name'];?></td>
					<td><?php echo $row['gender'];?></td>
					<td><?php echo $row['contactno'];?></td>
                    <td><?php echo $row['address'];?></td>
                    <td><?php echo $row['email'];?></td>
                    <td><?php echo $row['date'];?></td>
					<td><a href="gDelete.php?id=<?php echo $row['id']?>" class="btn btn-danger">Delete</a></td>
				</tr>
				<?php
                $a++;
			}
        
		}else{
			echo "No data Found";
		}
	?>
	
</table>



<!-- End Main -->
<!-- Start Footer --->
<div class="row" >
  <div class="col-sm-12 alert alert-dark" style="min-height:70px; margin-top:5px;">
<!---<p><a href="alogin.php">Admin Login here..</a></p>-->
         <p style="text-align:center;float:left;">Copyright &copy;  2022-23 - All Rights Reserved to Hostels Register Management.</p>
         <p style="text-align:center;float:right;">   Developed By: SBV</p>
</div>
</div>
<!-- End Footer -->
    </div>
</body>
</html>