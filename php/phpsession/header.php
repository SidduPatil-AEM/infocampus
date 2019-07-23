<?php 
    session_start();
    if(!isset($_SESSION['name'])){
        header("Location:index.php");
    }
    $conn = mysqli_connect("localhost","root","","session"); // for db connection
?>
<html>
<head>
	<link rel="stylesheet" href="dist/css/bootstrap.css">
</head>
<body>
<div class="container">
<div class="row">
		<div class="col-md-12">
			<ul class="nav nav-pills text-center">
				<li class="active"><a href="home.php">My Home</a></li>
				<li><a href="editprofile.php">Edit Profile</a></li>
				<li><a href="mydata.php">Manage Data</a></li>
				<li><a href="logout.php">Welcome <?php echo $_SESSION['name'] ?> Logout</a></li>
			</ul>	
		</div><!-- 12 col end -->
</div><!-- row end -->