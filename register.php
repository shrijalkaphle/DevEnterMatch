<?php
	$title = "Register";
	include 'layout/header.php';

	$error = NULL;

	if (isset($_POST['submit'])) {
		$name = $_POST['uname'];
		$email = $_POST['email'];
		$password1 = $_POST['pwd1'];
		$password2 = $_POST['pwd2'];
		$role = $_POST['role'];

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

				$query1 = "INSERT INTO user (username, email, password, role) VALUES ('$name', '$email', '$password1', '$role')";
				$result1 = mysqli_query($conn,$query1) or die('dberror');

				$query2 = "SELECT * FROM user WHERE email = '$email'";
				$result2 = mysqli_query($conn,$query2);

				$row = mysqli_fetch_assoc($result2);
				$uid = $row['id'];

				$query3 = "INSERT INTO user_details (uid) VALUES('$uid')";
				$result3 = mysqli_query($conn,$query3);
				$msg = "Regestration Successfull!";
				echo "<script>window.location.replace('index.php?msg=$msg');</script>";
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

					<div class="form-group">
						<label>Role</label>
						<select name="role" class="form-control">
							<option value="entrepneur">Entrepneur</option>
							<option value="developer">Developer</option>
							<option value="sponser">Sponser</option>
						</select>
					</div>

					<div class="text form-group">
						<input type="submit" name="submit" class="btn btn-default" required>
					</div>
				</form>
			</div>
			<?php
				include 'layout/footer.php';
			?>