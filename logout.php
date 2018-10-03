<?php 

	session_start();
	session_destroy();

	$msg = "Logout Successfull! See you Again!";
	
	echo "<script>window.location.replace('index.php?msg=$msg');</script>";
?>