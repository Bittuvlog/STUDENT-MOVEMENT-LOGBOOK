<?php
session_start();
$email=$_SESSION['user'];
//echo $email;
if($_SESSION['user']=="") 
{
	session_destroy();
	echo "<script>window.location.href='slogin.php?msgg=3';</script>";
}
error_reporting(0);
$msg1=$_REQUEST['msg'];
//echo $msg1;
if($msg1==1)
{
	echo "<script>alert('Your Entry Done');</script>";
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
        <a class="navbar-brand" href="sprofile.php">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample09">
          <ul class="navbar-nav nav-fill w-100">
          <li class="nav-item active">
              <a class="nav-link" href="ask.php">Ask Leave<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="sfeedback.php">Feedback<span class="sr-only">(current)</span></a>
            </li>
       <li class="nav-item">
        <a class="nav-link" href="schangepwd.php">Change Password</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="slogout.php">Logout</a>
      </li>
          </ul>
        </div>
      </nav>
</div>
</div>
    <!-- End Menu-->

<!-- Start Main -->
<div class="row">
  <!-- first div Open -->
  <div class="col-sm-6 btn btn-default">

<div class="row">


  <div class="col-sm-6">
  <?php
      include('connection.php');
      $query = "SELECT id,img_source FROM tbl_register where email='$email'";
      $res=mysqli_query($con,$query);
      if($row=mysqli_num_rows($res)>0){
         while($row=mysqli_fetch_assoc($res)){
          $img=$row['img_source'];
         ?>	
 <img src="<?php echo $img;?>" height="100px" width="150px" />
<?php
       }
   }else{
       ?>
 <tr>
   <td colspan="6">No data Found</td>
</tr>
 <?php
   }

?>

  </div>


  <div class="col-sm-6">
  <b class="btn btn-primary"> <?php echo 'Welcome ',$email; ?></b>
  </div>

</div>


<hr/>
<!-- Show data --->
<?php
include('connection.php');
$query="select * from tbl_register where email='$email'";
$res=mysqli_query($con,$query);
if($row=mysqli_num_rows($res)>0){
  while($row=mysqli_fetch_assoc($res)){
?>

<br/>
<b>Roll No.</b> <?php echo $row['rollno'];?>
<hr/>
<br/>
<b>Name</b> <?php echo $row['name'];?>
<hr/>
<br/>
<b>Gender</b> <?php echo $row['gender'];?>
<hr/>
<br/>
<b>Contact No.  </b> <?php echo $row['contactno'];?>


<?php
      }
      ?>
<?php
}
else
{
  echo "Data not found";
}
?>
    </div>
    <!-- first div End -->
  <!-- 2nd div Open -->
    <div class="col-sm-6">
<!-- Start Main -->
<div class="row" style="background-color:white;">
  <div class="col-sm-2"></div>
  <div class="col-sm-8">
  <div class="row shadow-lg p-3 mb-5 bg-white rounded">
    <form action="entrycode.php" method="POST">
		<div class="col-sm-12">
      <h1 style="color:blue;text-align:center;">ENTRY</h1><br/>
			<div class="contact-form">

            <div class="form-group">
				  <label class="control-label col-sm-12">Enter Your Name:</label>
				  <div class="col-sm-12">
					<input type="text" class="form-control" name="name" required/>
				  </div>
				</div>

        <div class="form-group">
				  <label class="control-label col-sm-12">Choose Your Branch:</label>
				  <div class="col-sm-12">
			<select class="custom-select" name="branch">
            <option value="">--Select--</option>
            <option value="CSE">Computer Science and Engineering</option>
            <option value="EE">Electrical Engineering</option>
            <option value="El">Electronics Engineering</option>
      </select>
				  </div>
				</div>

        <div class="form-group">
				  <label class="control-label col-sm-12">Choose Your Year:</label>
				  <div class="col-sm-12">
			<select class="custom-select" name="year">
            <option value="">--Select--</option>
            <option value="1">1 <sup>st</sup> Year</option>
            <option value="2">2 <sup>nd</sup> Year</option>
            <option value="3">3 <sup>rd</sup> Year</option>
            <option value="4">4 <sup>th</sup> Year</option>
      </select>
				  </div>
				</div>


				<div class="form-group">
				  <div class="col-sm-12">
          <div class="mb-3">
    <label>Enter The Place : </label>
    <textarea class="form-control" name="place"  placeholder="Name of the place..." required></textarea>
  </div>
				  </div>
				</div>
				<div class="form-group">
				  <div class="col-sm-offset-2 col-sm-12">
					<button type="submit" class="btn btn-primary">Submit</button>
				  </div>
				</div>

			</div>
		</div>
        </form>
	</div>

  </div>
  <div class="col-sm-2"></div>
</div>

<!-- End Main -->

    </div>
    <!-- 2nd div End -->
</div>
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