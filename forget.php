<?php 
	$title = "Reset Password";
	include 'layout/header.php';

	$error = NULL;
	
	if (isset($_POST['submit'])) {
		$email = $_POST['email'];

		$query = "SELECT * FROM user WHERE email = '$email'";
		$result = mysqli_query($conn,$query);

		$num = mysqli_num_rows($result);

		if ($num==0) {
			$error = "There is no account with this email!";
		} else {
			$row = mysqli_fetch_assoc($result);
			$id = $row['id'];
			echo "<script>window.location.replace('profileConfirm.php?id=$id');</script>";
		}

	}

	if ($error != NULL) {
?>
        <div class="alert alert-warning fade in alert-dismissible"><center><?php echo $error; ?></center></div>
<?php
  	}
?>

<div class="container" id="findEmail">
	<div class="row">
		<div class="margin"></div>
		<form method="post">
			<div class="col-md-4 col-md-offset-4">
				<div class="well">
					<div class="form-group">
						<label>E-mail</label>
						<input type="text" name="email" class="form-control" required>
					</div>
					<div class="text form-group">
						<input type="submit" name="submit" value="Find my Account" class="btn btn-default">
					</div>
				</div>
			</div>
		</form>
	</div>
</div>

<?php 
	include 'layout/footer.php';
?>