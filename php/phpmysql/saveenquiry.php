<?php
    

    $name = $_POST['fname'];
    $mobile = $_POST['mobile'];
    $city    = $_POST['city'];
    $address  = $_POST['address'];

    //connection to mysql
    //echo $name . $mobile .$city . $address
    $obj = mysqli_connect("localhost","root","","phpmysql");
    $sql = "insert into enquiry (name,mobile,city,address) values ('$name','$mobile','$city','$address') ";
    $status = mysqli_query($obj,$sql);

    if($status == true )
    {
        header("Location:enquirylist.php");
    }else{
        header("Location:enquiry.php");
    }


?>