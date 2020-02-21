<?php
session_start();
$_SESSION["username"] = $_GET["username"];
$_SESSION["pic"] = $_GET["pic"];
$_SESSION["islogged"] = 1;
echo "<script type='text/javascript'>document.location.href='/';</script>";
?>