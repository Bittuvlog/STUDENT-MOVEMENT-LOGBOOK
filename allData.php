<?php
 session_start();
  $email=$_SESSION['user'];
//   echo $email;
if($_SESSION['user']==""){
    session_destroy();
    echo"<script>window.location.href='glogin.php?msgg=3';</script>";
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
              <a class="nav-link" href="leave.php">Leave<span class="sr-only">(current)</span></a>
            </li>
      <!-- <li class="nav-item">
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
    <div class="row">
    <form action="" method="GET">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>From Date</label>
                                        <input type="date" name="from_date" value="<?php if(isset($_GET['from_date'])){ echo $_GET['from_date']; } ?>" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>To Date</label>
                                        <input type="date" name="to_date" value="<?php if(isset($_GET['to_date'])){ echo $_GET['to_date']; } ?>" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Click to Filter</label> <br>
                                      <button type="submit" class="btn btn-primary">Filter</button>
                                    </div>
                                </div>
                            </div>
                        </form>
      </div>




      <div class="row">
      <table class="table">
  <thead class="black white-text">
    <tr>
      <th scope="col">Sr.No</th>
      <th scope="col">Student Name</th>
      <th scope="col">Branch</th>
      <th scope="col">Year</th>
      <th scope="col">Place</th>
      <th scope="col">Out Date</th>
      <th scope="col">Student Out</th>
      <th scope="col">Out Time</th>
      <th scope="col">Student IN</th>
      <th scope="col">IN Time</th>
      <th scope="col">Date</th>
      
    </tr>
</thead>
  <tr>
<?php
include('connection.php');
 if(isset($_GET['from_date']) && isset($_GET['to_date']))
 {
     $from_date = $_GET['from_date'];
     $to_date = $_GET['to_date'];
 
     

$a=1;
     //include('connection.php');
    // $query="select * from tbl_entry where email='$email'";
   $query = "SELECT * FROM tbl_entry WHERE date BETWEEN '$from_date' AND '$to_date' ";
 
     $res=mysqli_query($con,$query);
     if($row=mysqli_num_rows($res)>0){
       while($row=mysqli_fetch_assoc($res)){
         ?>		</td>
 <td><?php echo $a;?></td>

 <td><?php echo $row['name'];?></td>
  <td><?php echo $row['branch'];?></td>
  <td><?php echo $row['year'];?></td>
  <td><?php echo $row['place'];?></td>

  <td><?php echo $row['date'];?></td>
  <td><?php echo $row['s_out'];?></a></td>
  <td><?php echo $row['out_time'];?></td>
  <td><?php echo $row['s_in'];?></a></td>
  <td><?php echo $row['in_time'];?></td>
  <td><?php echo $row['date'];?></td>
   
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
}
?>
</table>

      </div>
    
    
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