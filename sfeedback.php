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
	echo "<script>alert('Your feedback have received');</script>";
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

<!-- Start Main-->
<h1 style="text-align:center;color:blue;">Student Feedback </h1>
<br/>
<div class="shadow-lg p-3 mb-5 bg-white rounded">
<form action="sfeedbackcode.php" method="post" class="was-validated">
   <div class="mb-3">
    <label for="validationTextarea">Enter The Feedback : </label>
    <textarea class="form-control is-invalid" name="feedbacktext" id="validationTextarea" placeholder="Write feedback here..." required></textarea>
  </div>
        <button class="btn btn-primary" type="submit">Submit</button>
    <br/>
    <br/>
</form>
</div>
    <!-- End Main-->


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