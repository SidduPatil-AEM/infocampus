<?php
session_start();
unset($_SESSION['userid']);
$_SESSION['error'] = "You are logout successfully ! ";
header("Location:index.php");
?>