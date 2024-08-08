<?php
session_start();
$email=$_SESSION['user'];
//echo $email;
if($_SESSION['user']=="") 
{
	session_destroy();
	echo "<script>window.location.href='admin.php?msgg=3';</script>";
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

<!-- Start Main -->

<div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-6">
      <form action="addncode.php" method="post">
      <div class="form-group">
    <label for="exampleFormControlTextarea1">Add Notification :</label>
    <textarea class="form-control" name="notice" id="notice" rows="3" required></textarea>
  </div>
  <div class="form-group">
				  <div class="col-sm-offset-2 col-sm-12">
					<button type="submit" id="btnadd" class="btn btn-primary">Add</button>
				  </div>
				</div>

      </form>
    </div>
<div class="col-sm-3"></div>
</div>
<div class="row">
      <table class="table">
  <thead class="black white-text">
    <tr>
      <th scope="col">Sr.No</th>
      <th scope="col">Notice</th>
      <th scope="col">Date</th>
      <th scope="col">Delete</th>
      
    </tr>
</thead>
  <tr>
<?php
include('connection.php');
 
     $a=1;


     //include('connection.php');
    // $query="select * from tbl_entry where email='$email'";
   $query = "SELECT * FROM tbl_noti ";
 
     $res=mysqli_query($con,$query);
     if($row=mysqli_num_rows($res)>0){
       while($row=mysqli_fetch_assoc($res)){
         ?>		</td>
 <td><?php echo $a;?></td>

 <td><?php echo $row['notice'];?></td>
 
  <td><?php echo $row['date'];?></td>
  <td><a href="notiDelete.php?id=<?php echo $row['notid'];?>" class="btn btn-danger">DELETE</a></td>
       </tr>

<?php
$a++;
       }
   }else{
       ?>
 <tr>
   <td colspan="6">No data Found</td>
</tr>
 <?php
   }

?>
</table>
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