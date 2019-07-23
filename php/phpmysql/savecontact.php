<?php
    /*
    echo "<pre>";
    print_r( $_POST );
    echo "</pre>";

    echo "<pre>";
    var_dump( $_POST );
    echo "</pre>";

    echo "<hr>";
    echo $_POST['fname'];
    */

    $fullname = $_POST['fname'];
    $mobileno = $_POST['mobile'];
    $email    = $_POST['email'];
    $message  = $_POST['message'];

    //connection to mysql
    $obj = mysqli_connect("localhost","root","","phpmysql");
    $sql = "insert into contact (name,mobile,email,message) values ('$fullname','$mobileno','$email','$message') ";
    $status = mysqli_query($obj,$sql);

    if($status == true )
    {
        header("Location:contactlist.php");
    }else{
        header("Location:contact.php");
    }

    


?>