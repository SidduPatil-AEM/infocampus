<?php 
    session_start(); 
    /* to call a library from repo of php to maintain data globally in all files 
    of a project 
    session is predefined array,where element name is user defined.
    by default session will store data globally for 1440 seconds
    */
    $_SESSION['name']='ABC';
    $_SESSION['mobile']=999999999999;
    $_SESSION['city']="Bangalore";
    $_SESSION['age']="23 Years";
    
    echo "Session created successfully";
    
    
?>