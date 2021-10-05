<?php
	include("dbconfig.php");
	$name = $_POST['catname'];
	$sql = "insert into category(catname) values('$name')";
    mysqli_query($conn,$sql);
    header("Location:cat.php");
?>

