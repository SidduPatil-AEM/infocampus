<?php
	include("dbconfig.php");
	$ip = $_POST['ip'];
	$datetime = $_POST['datetime'];
	 $sql="insert into uservisit(ip, datetime)
        values('$ip', '$datetime')";
		
		$res = mysqli_query($conn,$sql);
		if($res==true)
		{
			header("Location:uservisit.php");
			
		}else
		{
			header("Location:newvisit.php");
		}
			?>