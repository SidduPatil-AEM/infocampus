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

    $name = $_POST['name'];
    $username = $_POST['username'];
    $password    = $_POST['password'];
    $cpassword  = $_POST['cpassword'];
    $gender = $_POST['gender'];
    $skill = $_POST['skill'];
    $contactno    = $_POST['contactno'];
    $email  = $_POST['email'];
    $college  = $_POST['college'];

    //connection to mysql
    $obj = mysqli_connect("localhost","root","","phpmysql");
    $sql = "insert into myuser (name,username,password,cpassword,gender,skill,contactno,email,college) 
    values ('$name','$username','$password','$cpassword','$gender','$skill','$contactno','$email',,'$college') ";
    $status = mysqli_query($obj,$sql);

    if($status == true )
    {
        header("Location:contactlist.php");
    }else{
        header("Location:contact.php");
    }

    


?>