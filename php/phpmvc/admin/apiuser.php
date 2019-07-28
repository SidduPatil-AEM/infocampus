<?php
	include("dbconfig.php");
	$myuser = array();
	$sql ="select * from user order by id desc";
	$res = mysqli_query($conn,$sql);
	while($row = mysqli_fetch_object($res))
	{
        		array_push($myuser, $row);//combining single array to multi array
	}
	//converting 1 array to multi array to send php to angular
	$jsondata=json_encode($myuser);
	
	echo $jsondata;//response will go to angular in form of json
?>