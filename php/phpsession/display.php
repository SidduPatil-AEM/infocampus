<?php 
    session_start();
    echo "<h1>Data from session listed here</h1>";
    
    echo "<pre>";
    print_r( $_SESSION );
    echo "</pre>";
    
    echo "<hr>";
    echo $_SESSION['city'];
?>