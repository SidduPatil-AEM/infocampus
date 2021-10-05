<?php
   include("dbconfig.php");
   $name = $_POST['name'];
    $email = $_POST['email'];
   $password = $_POST['password'];
   $mobile = $_POST['mobile'];
   $pincode = $_POST['pincode'];
   $address = $_POST['address'];
   
   
   $sql="insert into user(name, email,  password, mobile, pincode, address)
        values('$name', '$email', '$password', '$mobile', '$pincode' , '$address')";
		
		$res = mysqli_query($conn,$sql);
		if($res==true)
		{
			header("Location:userlist.php");
			
		}else
		{
			header("Location:newuser.php");
		}
		
?>


 