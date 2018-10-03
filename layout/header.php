<?php
  include 'dbconnect.php';
  session_start();
  
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>DevMatch</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Charmonman">
</head>
<body>
    <nav class="navbar navbar-default navbar-static-top" role="navigation">
      <div class='container'>
        <div class="navbar-header">
          <a href="index.php" class="navbar-brand">DevEnterMatch</a>
        </div>
        <ul class="nav navbar-nav navbar-right">
          <?php 
            if (isset($_SESSION['name'])) {
          ?>
              <li><a href="home.php">Home</a></li>
          <?php
            }
          ?>
          <li><a href="about.php">About</a></li>
          <li><a href="contact.php">Contact Us</a></li>
          <?php 
            if (!isset($_SESSION['name'])) {
          ?>
              <li><a href="register.php">Register</a></li>
          <?php
            } else {
          ?>
              <li><a href="profile.php?id=<?php echo($_SESSION['id']) ?>">Profile</a></li>
              <li><a href="logout.php">Logout</a></li>
          <?php
            }
          ?>
        </ul>
        <!-- /.navbar-collapse -->
      </div>
    </nav>

    