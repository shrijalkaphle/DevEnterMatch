<?php
	include 'layout/header.php';
	if(!isset($_SESSION['name'])) {
    $msg = "Cannot view This page! Login to Continue!";
    echo "<script>window.location.replace('login.php?msg=$msg');</script>";
  } 
?>