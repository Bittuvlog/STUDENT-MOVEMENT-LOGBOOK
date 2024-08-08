<?php
session_start();
$email=$_SESSION['user'];
//echo $email;
if($_SESSION['user']=="") 
{
	session_destroy();
	echo "<script>window.location.href='admin.php?msgg=3';</script>";
}
$id=$_REQUEST['id'];
//echo $id;
	include("connection.php");
	$query="select * from tbl_register where id='$id'";
	$res=mysqli_query($con,$query);
	if($row=mysqli_fetch_assoc($res))
	{
		$id=$row['id'];
        $roll=$row['rollno'];
		$name=$row['name'];
		//echo $name;
        $contact=$row['contactno'];
        $address=$row['address'];
		
		
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
        <a class="nav-link" href="mContactus.php">Contact Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="mFeedback.php">Feedback</a>
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
    <div class="row">

<!-- Start first Div Student Register-->
<div class="col-sm-6">
<div class="row shadow-lg p-3 mb-5 bg-white rounded">
<form action="sUpdatecode.php" method="POST">
    <div class="col-sm-12">
  <h1 style="color:blue;text-align:center;">Student Update Details </h1><br/>
        <div class="contact-form">
<input type="hidden" name="id" value="<?php echo $id?>" />
        <div class="form-group">
              <label class="control-label col-sm-12" for="contact1">Enter Roll Number:</label>
              <div class="col-sm-12">
                <input type="number" class="form-control" value="<?php echo $roll; ?>" id="contact1" name="rollno" />
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-sm-12" for="name">Enter Name:</label>
              <div class="col-sm-12">
                <input type="text" class="form-control" id="name" value="<?php echo $name; ?>" name="name" />
              </div>
            </div>

            
            <div class="form-group">
              <label class="control-label col-sm-12" for="contact">Enter Contact No:</label>
              <div class="col-sm-12">
                <input type="text" class="form-control" id="contact" value="<?php echo $contact; ?>" name="contactno" />
              </div>
            </div>
           
                
            <div class="form-group">
              <label class="control-label col-sm-12" for="comment" >Enter Address:</label>
              <div class="col-sm-12">
                <textarea class="form-control" name="address" cols="30" rows="2" style="resize:none;" id="comment" >
                <?php echo $address; ?>
            </textarea>
              </div>
            </div>

            
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-12">
                <button type="submit" class="btn btn-primary">Update</button>
              </div>
            </div>

        </div>
    </div>
    </form>
</div>

</div>
<!-- End first div Student Register-->
</div>
<!-- Start Main -->

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