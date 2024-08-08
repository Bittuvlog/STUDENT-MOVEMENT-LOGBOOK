<?php
  session_start();
  $email=$_SESSION['user'];
//   echo $email;
if($_SESSION['user']==""){
    session_destroy();
    echo"<script>window.location.href='admin.php?msgg=3';</script>";
}

include('connection.php');
$query="select * from tbl_feedback";
$res=mysqli_query($con,$query);

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
    <!-- start main -->

    <table class="table">
  <thead class="black white-text">
    <tr>
      <th scope="col">Sr.No</th>
      <th scope="col">Name</th>
      <th scope="col">Feedback</th>
      <th scope="col">Date</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
	<?php 
  include('connection.php');
  $query="select * from tbl_feedback";
  $res=mysqli_query($con,$query);

          $a=1;
          while($row=mysqli_fetch_assoc($res)){
          
           $sid=$row['stuid'];
            //echo $sid;
        
           $fid=$row['id'];
           //echo $fid;
            $feed=$row['feedback'];
            //echo $feed;
           $date=$row['date'];
           //echo $date;
           
           ?>
<tr>
<td><?php echo $a ;?></td>
      <td>
        <?php 
        $query1="select * from tbl_register where id=$sid";
        $res1=mysqli_query($con,$query1);
        if($row=mysqli_fetch_assoc($res1)){
          $name=$row['name'];
          echo $name;
        }
        
        ?>
      </td>
     
      <td><?php echo $feed;?></td>
       <td><?php echo $date;?></td>
       <td><a href="feedDelete.php?id=<?php echo $fid?>" class="btn btn-danger">DELETE</a></td>
</tr>



       
      
        <?php
        $a++;
          }
        ?>
</table>


    
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





