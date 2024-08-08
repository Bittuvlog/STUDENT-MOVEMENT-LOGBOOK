<?php
  session_start();
  $email=$_SESSION['user'];
//   echo $email;
if($_SESSION['user']==""){
    session_destroy();
    echo"<script>window.location.href='admin.php?msgg=3';</script>";
}

include('connection.php');
$query="select * from tbl_contact";
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
        <a class="nav-link" href="mStudent.php">Manage Student </a>
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
      <th scope="col">Student Name</th>
      <th scope="col">Gender</th>
      <th scope="col">Address</th>
      <th scope="col">Contact No</th>
      <th scope="col">Email</th>
      <th scope="col">Message</th>
      <th scope="col">Date</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
	<?php 
          $a=1;
          while($row=mysqli_fetch_assoc($res)){
          
           $id=$row['id'];
          //  echo $id;

           $name=$row['name'];
            $gender=$row['gender'];
           $address=$row['address'];
           $contact=$row['contactno'];
           $email=$row['email'];
           $message=$row['message'];
           $date=$row['date'];



        //    $name1=$row['name'];
        //    echo $name1;
        //    echo $uid;
           ?>
<tr>
       <td><?php echo $a ;?></td>
     
        <?php 
        $query1="select * from tbl_register";
        $res1=mysqli_query($con,$query1);
        if($row=mysqli_fetch_assoc($res1)){
          // $name=$row['name'];
          // echo $name;
        }
        
        ?>
      
    
      <td><?php echo $name;?></td>
       <td><?php echo $gender;?></td>
       <td><?php echo $address;?></td>
       
      <td><?php echo $contact;?></td>
       <td><?php echo $email;?></td>
       <td><?php echo $message;?></td>
       <td><?php echo $date;?></td>
       <td><a href="contactdelete.php?id=<?php echo $id?>" class="btn btn-danger">DELETE</a></td>

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