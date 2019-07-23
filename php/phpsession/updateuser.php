<?php
    session_start();
    $conn = mysqli_connect("localhost","root","","session");
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $name = $_POST['fname'];
    $mobile = $_POST['mobile'];
    $city = $_POST['city'];
    $age = $_POST['age'];
    $userid=$_SESSION['id'];    

    $sql = "update user set 
                        fullname='$name',
                        email='$email',
                        password='$pass',
                        mobile='$mobile',
                        city='$city',
                        age='$age' where id = '$userid'";
       mysqli_query($conn, $sql);
       $_SESSION['name']=$name;
       header("Location:home.php");
?>