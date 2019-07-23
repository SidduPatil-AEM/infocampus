<?php 
    session_start();
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $conn = mysqli_connect("localhost","root","","session");
    $sql = "select * from user where email='$email' and password= '$pass'";
    $res = mysqli_query($conn, $sql);
    $totaluser = mysqli_num_rows($res);
    
    if(($totaluser > 0))
    {
        $row = mysqli_fetch_object($res);
        $_SESSION['name']=$row->fullname;
        $_SESSION['mobile']=$row->mobile;
        $_SESSION['city']=$row->city;
        $_SESSION['age']=$row->age;
        $_SESSION['id']=$row->id;
        header("Location:home.php");
    }else{
        header("Location:index.php");
    }
?>