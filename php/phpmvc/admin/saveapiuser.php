<?php
   include("dbconfig.php");
   
   $postdata = json_decode(file_get_contents("php://input"));
   //to receive data from angular 2,3,4,5,6,7 
   
   if($postdata->name !=""){
       $name = $postdata->name;
       $email = $postdata->email;
       $mobile = $postdata->mobile;
       $info="User failed to save";
       $data = array("info"=>"Some Error ! Try Again");
       $sql="insert into user(name, email, mobile)
            values('$name', '$email','$mobile')";
    		
		$res = mysqli_query($conn,$sql);
		if($res==true)
		{
		  $data = array("info"=>"success");	
		}
		$jsondata=json_encode($data);
		
		echo $jsondata;
   }
?>


 