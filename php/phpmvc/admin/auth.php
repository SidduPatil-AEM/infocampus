<?php 
	session_start();
	include("dbconfig.php");
	$uname = $_POST['userid'];
	$pass = $_POST['pass'];
	
	$sql="select * from admin where userid='$uname' and pass='$pass'";
	$res = mysqli_query($conn, $sql);
	$totalRecord = mysqli_num_rows($res);
	if($totalRecord > 0)
	{
		$_SESSION['userid'] = $uname;
		header("Location:home.php");
	}
	else{
		$_SESSION['error'] = "User Details Invalid  OR Not Exists !";
		header("Location:index.php");
	}
?>