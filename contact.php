<?php
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
<hr/>
<!-- Start Main-->
<div class="row" style="background-color:white;">
  <div class="col-sm-3"></div>
  <div class="col-sm-6">
  <div class="row shadow-lg p-3 mb-5 bg-white rounded">
    <form action="contactcode.php" method="post" class="was-validated">
		<div class="col-sm-12">
    <h1 style="color:blue;text-align:center;">Contact Us</h1>
			<div class="contact-form">
				<div class="form-group">
					<label class="control-label col-sm-12" for="name">Enter Your Name<font color="red">*</font></label>
				  <div class="col-sm-12">
					<input type="text" class="form-control" id="name" name="name" onkeyup="validateName()" required/>
				  </div>
				</div>
                <!-- Default inline 1-->
                &nbsp;&nbsp;
                Select Your Gender<font color="red">*</font>
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
                    <br/>
                    <br/>
                <div class="form-group">
				  <label class="control-label col-sm-12" for="comment" >Enter Your Address<font color="red">*</font></label>
				  <div class="col-sm-12">
					<textarea class="form-control" name="address" cols="30" rows="2" style="resize:none;" id="comment" required></textarea>
				  </div>
				</div>
				<div class="form-group">
				  <label class="control-label col-sm-12" for="contact">Enter Your Contact No<font color="red">*</font></label>
				  <div class="col-sm-12">
					<input type="text" class="form-control" id="contact" name="contactno"  onkeyup="validateContact()" required/>
				  </div>
				</div>
				<div class="form-group">
				  <label class="control-label col-sm-12" for="email">Enter Email Address<font color="red">*</font></label>
				  <div class="col-sm-12">
					<input type="email" class="form-control" id="email" name="email" onkeyup="validateEmail()" required/>
				  </div>
				</div>
				<div class="form-group">
				  <label class="control-label col-sm-12" for="comment">Enter Message<font color="red">*</font></label>
				  <div class="col-sm-12">
					<textarea class="form-control" name="message" cols="30" rows="2" style="resize:none;" id="comment" required></textarea>
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
  <div class="col-sm-3">
</br>
  <div id="map-container-google-11" class="z-depth-1-half map-container-6" style="height: 300px;">
  
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3626.658756023207!2d83.08277321483345!3d24.635443584160548!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x398ef10d3a9a69b9%3A0x33a5956e97711e15!2sRajkiya%20engineering%20college%20sonbhadra!5e0!3m2!1sen!2sin!4v1638553049560!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      </div>
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