<?php
  include 'dbconnect.php';
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $title ?></title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <nav class="navbar navbar-default navbar-static-top" role="navigation">
      <div class='container'>
        <div class="navbar-header">
          <a href="index.php" class="navbar-brand">DevEnterMatch</a>
        </div>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="contact.php">Contact Us</a></li>
        </ul>
        <!-- /.navbar-collapse -->
      </div>
    </nav>