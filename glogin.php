<!DOCTYPE html>
<html lang="en">
<?php
error_reporting(0);
$msg=$_REQUEST['msgg'];
//echo $msg;
if($msg==1)
{
	echo "<script>alert('Invalid Email Or Password');</script>";
}
if($msg==3)
{
	echo "<script>alert('First login Then See Your Profile');</script>";
}
include("Genparent.php");

?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
<div class="row" style="margin-top:5px;">
    <aside class="col-sm-12">
<div class="card">
<article class="card-body">
	<a href="index.php">Back</a>
	<h4 class="card-title text-center mb-4 mt-1" style="color:blue;">Gaurd Login</h4>
	<hr>
	<form action="gaurdcode.php" method="post">

	<div class="form-group">
	<div class="input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
		<input class="form-control" placeholder="Email or login" type="email" name="email"/>
	</div> <!-- input-group.// -->
	</div> <!-- form-group// -->
	<div class="form-group">
	<div class="input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		 </div>
	    <input class="form-control" placeholder="******" type="password" name="password"/>
	</div> <!-- input-group.// -->
	</div> <!-- form-group// -->
	<div class="form-group">
	<button type="submit" class="btn btn-primary btn-block"> Login  </button>
	</div> <!-- form-group// -->

	</form>
</article>
</div> <!-- card.// -->

	</aside> <!-- col.// -->
</div>

</div>
</body>
</html>