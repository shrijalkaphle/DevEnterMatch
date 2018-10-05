<?php
	$title = "Update Password";
	include 'layout/header.php';

	$id = $_GET['id'];
	$error = NULL;
	
	if (isset($_POST['submit'])) {
		$pwd1 = $_POST['pwd1'];
		$pwd2 = $_POST['pwd2'];

		if ($pwd1 == $pwd2) {
			$query = "UPDATE user SET password = '$pwd1' WHERE id = '$id'";
			$result = mysqli_query($conn, $query);
			$msg = "Password Changed Successfully!";
			echo "<script>window.location.replace('index.php?msg=$msg')</script>";
		} else {
			$error = "Password Mismatch!";
		}
	}
?>

<div class="container">
	<div class="row">
		<form method="post" action="">
			<h3 class="text-center" id="text">Update Password</h3>
			<div class="col-md-4 col-md-offset-4">
				<div class="well">
					<div class="form-group">
						<label>New Password</label>
						<input type="password" name="pwd1" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Confirm Password</label>
						<input type="password" name="pwd2" class="form-control" required>
					</div>
					<div class="text form-group">
						<input type="submit" name="submit" class="btn btn-default">
					</div>
				</div>
			</div>
		</form>
	</div>
</div>

<?php 
	include 'layout/footer.php';
?>