<?php
ob_start();
session_start();
$conn = mysqli_connect("localhost","root","12345678","storage_items");
if($conn){}else{echo "notconnect";}
mysqli_query($conn,"set names utf8");
?>
