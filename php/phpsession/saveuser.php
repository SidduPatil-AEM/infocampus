<?php 
    session_start();
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $name = $_POST['fname'];
    $mobile = $_POST['mobile'];
    $city = $_POST['city'];
    $age = $_POST['age'];
    
    $sql = "insert into user(fullname,email,password,mobile,city,age) 
                values('$name','$email','$pass','$mobile','$city','$age')";
    $res = mysqli_query($conn, $sql);
    
    if(($res == true))
    {
        header("Location:index.php");
    }else{
        header("Location:signup.php");
    }
?>