<?php
session_start();
$email=$_SESSION['user'];
//echo $email;
if($_SESSION['user']=="") 
{
	session_destroy();
	echo "<script>window.location.href='slogin.php?msgg=3';</script>";
}
include("connection.php");
$query="select * from tbl_register where email='$email'";
$res=mysqli_query($con,$query);
if($row=mysqli_fetch_assoc($res))
{
$uid=$row['id'];
// echo $uid;
}

$query2="select * from tbl_leave where stuid='$uid'";	
$res2=mysqli_query($con,$query2);

include("GenParent.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      /* textarea {
    resize: none;
} */
    </style>
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
<!---Start Header---->
<div class="row">
    <div class="col-sm-4"></div>
    <div class="col-sm-4">
    <h2 align="center" style="font-family:Imprint MT Shadow;background-color:#;color:black;">Ask For Leave</h2>
    </div>
    <div class="col-sm-4"></div>
    </div>
     <!---End Header----->
     <!--- Start Form--->
     <div class="row">
<div class="col-sm-3"></div>
		<!---Start Form---> 
		<div class="col-sm-6 shadow-lg p-3 mb-5 bg-white rounded"> 
    <!-- Default form register -->
<form class=" border-light p-5" action="askcode.php" method="post">
<!-- New Password -->
<div class="form-group">
<label style="font-size:25px">Date From</label>
<input type="date" id="defaultRegisterFormPassword" name="a" class="form-control" aria-describedby="defaultRegisterFormPasswordHelpBlock" required><br/>
</div>
<div class="form-group">
<!-- Confirm number -->
<label style="font-size:25px">Date To</label>
<input type="date" id="defaultRegisterFormPassword" name="date" class="form-control" aria-describedby="defaultRegisterFormPasswordHelpBlock" required><br/>
</div>
<div class="form-group">
        <!-- Default textarea message -->
        <label for="defaultFormMessageModalEx" style="font-size:25px">Application For Leave</label>
        <textarea type="text" style="height:400px;width=100px;" id="defaultFormMessageModalEx" name="reason" class="md-textarea form-control" required></textarea>
</div>
<div class="form-group">
<!-- Submit up button -->
<button class="btn btn-info my-4 btn-block" type="submit">Submit</button>
</div>
</form>
    <!---End Form--->
    </div>
	<div class="col-sm-3"></div>
     </div>
     <!---End Form---->


       <br/>

    <div class="row">
      <div class="col-sm-4"></div>
      <div class="col-sm-4">
      <h1 align="center">My Leaves</h1>
      </div>
      <div class="col-sm-4"></div>
    </div>
    <div class="row">
    <div class="table-responsive">
<table class="table table-hover shadow p-3 mb-5 bg-white rounded">
  <thead class="black white-text">
    <tr>
      <th scope="col">Sr.No</th>
      <th scope="col">Date From</th>
      <th scope="col">Date To</th>
      <th scope="col">Reason</th>
      <th scope="col">Status</th>
      <th scope="col">Date of Apply</th>
    </tr>
	<?php
	$b=1;
	while($row2=mysqli_fetch_assoc($res2))
	{
	
	?>
			<tr>
			      <td><?php echo $b;?></td>
			      <td><?php echo $row2['dfrom'];?></td>
			      <td><?php echo $row2['dto'];?></td>
			      <td><?php echo $row2['reason'];?></td>
			      <td><?php echo $row2['status'];?></td>
			      <td><?php echo $row2['doa'];?></td>
			</tr>
			
<?php
$b++;
	}
	?>
	</table>
	</form>
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