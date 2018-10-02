<?php
	$title = "Register";
	include 'layout/header.php';

	$error = NULL;

	if (isset($_POST['submit'])) {
		$name = $_POST['uname'];
		$email = $_POST['email'];
		$password1 = $_POST['pwd1'];
		$password2 = $_POST['pwd2'];

		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  			$error = "Invalid Email Format!";
		} else {

			//checking for existing email

			$query = "SELECT * FROM user WHERE email = '$email'";
			$result = mysqli_query($conn,$query) or die('dberror');

			if (mysqli_num_rows($result) != 0) {
				$error = "User with this Email Already Exists!";
			} elseif($password1 != $password2) {
				$error = "Password Validation Unsuccessful!";
			} else {

				// user regestration

				$query1 = "INSERT INTO user (username, email, password) VALUES ('$name', '$email', '$password1')";
				$result1 = mysqli_query($conn,$query1) or die('dberror');

				echo "<script>window.location.replace('index.php');</script>";
			}
		}
	}
?>
<div class="container">
	<div class="row">
		<?php
			if ($error != NULL) {
		?>
				<div class="alert alert-warning"><center><?php echo $error; ?></center></div>
		<?php
			}
		?>
		<form method="post" action="">
			<h3 class="text-center">Register Page</h3>
			<div class="col-md-4 col-md-offset-4">
				<div class="well">

					<div class="form-group">
						<label>Username</label>
						<input type="text" name="uname" class="form-control" required>
					</div>

					<div class="form-group">
						<label>E-mail</label>
						<input type="text" name="email" class="form-control" required>
					</div>

					<div class="form-group">
						<label>Password</label>
						<input type="password" name="pwd1" class="form-control" required>
					</div>

						<div class="form-group">
						<label>Confirm Password</label>
						<input type="password" name="pwd2" class="form-control" required>
					</div>

					<div class="text form-group">
						<input type="submit" name="submit" class="btn btn-default" required>
					</div>
				</form>
			</div>
			<?php
				include 'layout/footer.php';
			?>