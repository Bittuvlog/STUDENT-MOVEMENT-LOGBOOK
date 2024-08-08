<?php
 session_start();
  $email=$_SESSION['user'];
//   echo $email;
if($_SESSION['user']==""){
    session_destroy();
    echo"<script>window.location.href='glogin.php?msgg=3';</script>";
}

error_reporting(0);
$msg=$_REQUEST['msg1'];
if($msg==7||$msg==8||$msg==9)
{
	echo "<script>alert('Password Not Changed');</script>";
}


include("Genparent.php");


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
<div class="container" >
    <!-- Start Menu-->
    <div class="row" style="margin-top:10px;min-height:50px;">
        <div class="col-sm-12">
      <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light container mx-auto" id="p">
        <a class="navbar-brand" href="gprofile.php">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample09">
          <ul class="navbar-nav nav-fill w-100">
          <li class="nav-item active">
        <a class="nav-link" href="allData.php">All Student Record<span class="sr-only">(current)</span></a>
      </li>
            <li class="nav-item active">
              <a class="nav-link" href="leave.php">Leave</a>
            </li>
<!--             
      <li class="nav-item">
        <a class="nav-link" href="mfeedback.php">Feedback</a>
      </li> -->
      <li class="nav-item">
        <a class="nav-link" href="gchangepwd.php">Change Password</a>
      </li>
     
       <li class="nav-item">
        <a class="nav-link" href="glogout.php">Logout</a>
      </li>
          </ul>
        </div>
      </nav>
</div>
</div>
    <!-- End Menu-->
    <!-- start main -->
    <h1 style="text-align:center;color:black;">Change Password</h1>
<div class="error-msg"></div>
<div class="row">
    <div class="col-sm-3"></div>
<div class="col-sm-6 shadow-lg p-3 mb-5 bg-white rounded">
    <form  action="gchangepwdcode.php" method="post">
    <label for="inputPassword"> <span><i class="fa fa-key fa-1x" aria-hidden="true"></i></span> Enter Old Password</label>
    <input type="password" id="inputPassword" name="oldpassword" class="form-control" required placeholder="Enter current password here..." aria-describedby="passwordHelpBlock"/>
    <label for="inputPassword1"><span><i class="fa fa-lock fa-1x" aria-hidden="true"></i></span> Enter New Password</label>
    <input type="password" id="inputPassword1" name="newpassword" class="form-control" required placeholder="Enter new password here..." aria-describedby="passwordHelpBlock"/>
    <label for="inputPassword2"><span><i class="fa fa-lock fa-1x" aria-hidden="true"></i></span> Enter Confirm Password</label>
    <input type="password" id="inputPassword2" name="confirmpassword" class="form-control" required placeholder="Enter confirm password here..." aria-describedby="passwordHelpBlock"/>
    <small id="passwordHelpBlock" class="form-text text-muted">
  Your password must be 8-20 characters long, contain letters and numbers, and must contain spaces, special characters.
</small>
    <button class="btn btn-primary" type="submit">Update</button>
        <br/>
        <br/>
 </form>
</div><!--/col-sm-6-->
  <div class="col-sm-3"></div>
</div><!--/row-->
    <!-- end main -->
   <!-- Start Footer -->
   <div class="row" >
  <div class="col-sm-12 alert alert-dark" style="min-height:70px; margin-top:5px;">
<!-- <p><a href="alogin.php">Admin Login here..</a></p> -->
         <p style="text-align:center;float:left;">Copyright &copy;  2022-23 - All Rights Reserved to HostelRegisterManagement.</p>
         <p style="text-align:center;float:right;">   Developed By: SBV</p>
</div>
</div>
   <!-- End footer -->
</div>
</body>
</html>