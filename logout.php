<?php
ob_start();
session_start();
Session_destroy();
header('location: index.php');
?>
