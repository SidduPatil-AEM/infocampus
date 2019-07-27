<h1 align="center">PHP Cookie & My Data</h1>
<p align="center">
	cookie is set for 3 minutes , if page is reloaded within 3 minutes 
	the cookie will extended for next 3 minutes.else it will redireect to login page.
</p>
<?php 
    if(isset($_COOKIE['name']))
    {
        setcookie("name",$_COOKIE['name'],time()+30);
        setcookie("pass",$_COOKIE['pass'],time()+30);
        
        echo "<h1>Welcome :".$_COOKIE['name'] . "</h1>";
        echo "<a href='logout.php'>Logout</h1>";
    }else{
        header("Location:index.php");
    }
?>