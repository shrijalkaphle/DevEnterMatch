<?php
	$title = "Login";
	include 'layout/header.php';
	$error = NULL;
	if (isset($_POST['submit'])) {
		$email = $_POST['email'];
		$password = $_POST['pwd'];

		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  			$error = "Invalid Email Format!";
		} else {

			$query = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";
			$result = mysqli_query($conn,$query) or die('dberror');
			$row = mysqli_fetch_assoc($result);

			$user = mysqli_num_rows($result);
			if($user == 1) {
				$_SESSION['role']=$row['role'];
				$_SESSION['name']=$row['username'];
			} else {
				$error =  "Invalid Email or Password!";
			}
		}
	}
?>
<div class="container">
	<div class="row">
		<?php
			if ($error != NULL) {
		?>
				<div class="alert alert-warning fade in alert-dismissible"><center><?php echo $error; ?></center></div>
		<?php
			}
		?>
		<form method="post" action="">
			<h3 class="text-center">Login Page</h3>
			<div class="col-md-4 col-md-offset-4">
				<div class="well">
					<div class="form-group">
						<label>E-mail</label>
						<input type="text" name="email" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="password" name="pwd" class="form-control" required>
					</div>
					<a href="#">Forget Password</a>
					<div class="text form-group">
						<input type="submit" name="submit" class="btn btn-default">
					</div>
				</form>
			</div>
			<?php
				include 'layout/footer.php';
			?>