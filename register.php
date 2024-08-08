<?php
session_start();
$email=$_SESSION['user'];
//echo $email;
if($_SESSION['user']=="") 
{
	session_destroy();
	echo "<script>window.location.href='admin.php?msgg=3';</script>";
}
error_reporting(0);
$msg1=$_REQUEST['msg'];
//echo $msg1;
if($msg1==1)
{
	echo "<script>alert('Successfully Student has been registered');</script>";
} 
if($msg1==2)
{
	echo "<script>alert('Not Register');</script>";
} 
if($msg1==3)
{
	echo "<script>alert('Successfully Gaurd has been registered');</script>";
} 
if($msg1==4)
{
	echo "<script>alert('Not Register');</script>";
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
<div class="row">

    <!-- Start first Div Student Register-->
    <div class="col-sm-6">
    <div class="row shadow-lg p-3 mb-5 bg-white rounded">
    <form action="regcode.php" method="POST" enctype="multipart/form-data" class="was-validated">
		<div class="col-sm-12">
      <h1 style="color:blue;text-align:center;">Student Registration</h1><br/>
			<div class="contact-form">

            <div class="form-group">
				  <label class="control-label col-sm-12" for="contact1">Enter Roll Number:</label>
				  <div class="col-sm-12">
					<input type="number" class="form-control" id="contact1" name="rollno" required/>
				  </div>
				</div>

				<div class="form-group">
				  <label class="control-label col-sm-12" for="name">Enter Name:</label>
				  <div class="col-sm-12">
					<input type="text" class="form-control" id="name" name="name" onkeyup="validateName()" required/>
				  </div>
				</div>

                <!-- Default inline 1-->
                &nbsp;&nbsp;
                Select  Gender:
                &nbsp;&nbsp;&nbsp;&nbsp;
                <div class="custom-control custom-radio custom-control-inline">
                     <input type="radio" class="custom-control-input" value="Male" id="defaultInline1" name="gender" required/>
                    <label class="custom-control-label" for="defaultInline1">Male</label>
                </div>&nbsp;&nbsp;&nbsp;&nbsp;
                <!-- Default inline 2-->
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" class="custom-control-input" value="Female" id="defaultInline2" name="gender" required/>
                    <label class="custom-control-label" for="defaultInline2">Female</label>
                </div>
                <div class="form-group">
				  <label class="control-label col-sm-12" for="contact">Enter Contact No:</label>
				  <div class="col-sm-12">
					<input type="text" class="form-control" id="contact" name="contactno" onkeyup="validateContact()" required/>
				  </div>
				</div>
               
                <div class="form-group">
                    <label for="control-label col-sm-12">Upload Photos</label>
                    <input type="file" name="image"class="form-control" required/>
                </div>
                    
                <div class="form-group">
				  <label class="control-label col-sm-12" for="comment" >Enter Address:</label>
				  <div class="col-sm-12">
					<textarea class="form-control" name="address" cols="30" rows="2" style="resize:none;" id="comment" required></textarea>
				  </div>
				</div>

				<div class="form-group">
				  <label class="control-label col-sm-12" for="email">Enter Email Address:</label>
				  <div class="col-sm-12">
					<input type="email" class="form-control" id="email" name="emailaddress" onkeyup="validateEmail()" required/>
				  </div>
				</div>

                <div class="form-group">
                    <label for="inputPassword" class="col-sm-12 col-form-label">Enter Password:</label>
                    <div class="col-sm-12">
                        <input type="password" class="form-control" id="inputPassword" name="password" onkeyup="validatePassword()" required/>
						<span id="sp"></span>
                    </div>
                </div>

				<div class="form-group">
				  <div class="col-sm-offset-2 col-sm-12">
					<button type="submit" class="btn btn-primary">Register</button>
				  </div>
				</div>

			</div>
		</div>
        </form>
	</div>

    </div>
    <!-- End first div Student Register-->

    <!-- Start second Div Student Register-->
    <div class="col-sm-6">

    
    <div class="row shadow-lg p-3 mb-5 bg-white rounded">
    <form action="gregcode.php" method="POST" enctype="multipart/form-data" class="was-validated">
		<div class="col-sm-12">
      <h1 style="color:blue;text-align:center;">Gaurd Registration</h1><br/>
			<div class="contact-form">

            <div class="form-group">
				  <label class="control-label col-sm-12" for="contact1">Enter Id:</label>
				  <div class="col-sm-12">
					<input type="text" class="form-control" id="contact1" name="gid" required/>
				  </div>
				</div>

				<div class="form-group">
				  <label class="control-label col-sm-12" for="name">Enter Name:</label>
				  <div class="col-sm-12">
					<input type="text" class="form-control" id="name" name="name" onkeyup="validateName()" required/>
				  </div>
				</div>

                <!-- Default inline 1-->
                &nbsp;&nbsp;
                Select Gender:
                &nbsp;&nbsp;&nbsp;&nbsp;
                <div class="custom-control custom-radio custom-control-inline">
                     <input type="radio" class="custom-control-input" value="Male" id="defaultInline113" name="ggender" required/>
                    <label class="custom-control-label" for="defaultInline113">Male</label>
                </div>&nbsp;&nbsp;&nbsp;&nbsp;
                <!-- Default inline 2-->
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" class="custom-control-input" value="Female" id="defaultInline114" name="ggender" required/>
                    <label class="custom-control-label" for="defaultInline114">Female</label>
                </div>
                <div class="form-group">
				  <label class="control-label col-sm-12" for="contact">Enter Contact No:</label>
				  <div class="col-sm-12">
					<input type="text" class="form-control" id="contact" name="contactno" onkeyup="validateContact()" required/>
				  </div>
				</div>
                
                <div class="form-group">
                    <label for="control-label col-sm-12">Upload Photos</label>
                    <input type="file" name="image"class="form-control" required/>
                </div>
                    
                <div class="form-group">
				  <label class="control-label col-sm-12" for="comment" >Enter Address:</label>
				  <div class="col-sm-12">
					<textarea class="form-control" name="address" cols="30" rows="2" style="resize:none;" id="comment" required></textarea>
				  </div>
				</div>

				<div class="form-group">
				  <label class="control-label col-sm-12" for="email">Enter Email Address:</label>
				  <div class="col-sm-12">
					<input type="email" class="form-control" id="email" name="emailaddress" onkeyup="validateEmail()" required/>
				  </div>
				</div>

                <div class="form-group">
                    <label for="inputPassword" class="col-sm-12 col-form-label">Enter Password:</label>
                    <div class="col-sm-12">
                        <input type="password" class="form-control" id="inputPassword" name="password" onkeyup="validatePassword()" required/>
						<span id="sp"></span>
                    </div>
                </div>

				<div class="form-group">
				  <div class="col-sm-offset-2 col-sm-12">
					<button type="submit" class="btn btn-primary">Register</button>
				  </div>
				</div>

			</div>
		</div>
        </form>
	</div>


    </div>
    <!-- End second div Student Register-->

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