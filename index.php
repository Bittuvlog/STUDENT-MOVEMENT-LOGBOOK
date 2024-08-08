<?php
error_reporting(0);//allwase first line error_reporting(0) in all webPage but second line error line belong
$msg=$_REQUEST['msg'];
//echo $msg;
if($msg==2)
{
	echo "<script>alert('You are not Registered');</script>";
}
error_reporting(0);
$msg1=$_REQUEST['msg1'];
//echo $msg1;
if($msg1==3)
{
	echo "<script>alert('Congratulation now you are in our touch');</script>";
}
if($msg1==4)
{
	echo "<script>alert('Your request is failed please try again ');</script>";
}
error_reporting(0);
$msg=$_REQUEST['msgg'];
//echo $msg;
if($msg==2)
{
	echo "<script>alert('Logout successfully');</script>";
}
error_reporting(0);
$msg=$_REQUEST['ms'];
//echo $msg;
if($msg==2)
{
	echo "<script>alert('Logout successfully');</script>";
}

error_reporting(0);
$msg1=$_REQUEST['msg1'];
//echo $msg1;
if($msg1==6)
{
	echo "<script>alert('Password change Successfully ');</script>";
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
        <a class="navbar-brand" href="index.php">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample09">
          <ul class="navbar-nav nav-fill w-100">
            <li class="nav-item active">
              <a class="nav-link" href="about.php">About Us<span class="sr-only">(current)</span></a>
            </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Login
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="slogin.php">Student</a>
          <a class="dropdown-item" href="glogin.php">Gaurd</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="admin.php">Admin</a>
        </div>
      </li>

       <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact Us</a>
      </li>
          </ul>
        </div>
      </nav>
</div>
</div>
    <!-- End Menu-->
<!-- Start Slider -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="Images/1.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="Images/2.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="Images/3.png" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!--End Slider-->

<!-- Start Main -->
<hr/>
<div class="row">
            <div class="col-sm-6 btn btn-secondary"style="height:300px;">
             <!--- Start Notice---->
     <div class="row">
     <div class="col-sm-12">
     <h2 align="center">Notice<h2>
     </div>
     </div>
     <!--- Start Form--->
     <div class="row">
     <div class="col-sm-12">
     <marquee scrollamount= "5" onmouseover= "stop();" onmouseout= "start();"width="100%" direction="up" height="200px">
					  <font style="color:blue"><font size="10px">
				 <?php
				     include("connection.php");
                    $query="select * from tbl_noti order by notid desc limit 0,1";
					$res=mysqli_query($con,$query);
                     if($row=mysqli_fetch_assoc($res))
                     {
                          echo $s=$row['notice'];

                      }				
                    ?>
						</marquee></font></font>
     </div></div>
     <!---End Form---->
     <!--- End Notice---->
            </div>
            <div class="col-sm-6 btn btn-secondary"style="height:300px;">
            There are 03 Hostel to accomodate male students in the Campus. These are BH-1, BH-2, and BH-3. The total available rooms in these hostels are 420. These hostels are governed and managed by council of wardens comprising warden and chaired by Chairman Council of Wardens. Each hostel have a mate and staff to facilitate students and to manage day to day activities in the hostel. Each hostel has its seperate mess and canteen.
       
            </div>
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