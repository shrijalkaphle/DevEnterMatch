<?php
	$title = "Contact";
	include 'layout/header.php';

	$error = NULL;
	$msg = NULL;

	if (isset($_POST['submit'])) {

		$name = $_POST['name'];
		$email = $_POST['email'];
		$comment = $_POST['comment'];

		$mailmsg = "Name : ".$name."\r\nEmail : ".$email."\r\nComment : \r\n".$comment;

		$query = "INSERT INTO contact (name, email, comment) VALUES ('$name', '$email', '$comment')";
		$result = mysqli_query($conn,$query);
		
		if ($result) {
			$msg = "Thank you for contacting us!";
		} else {
			$error = "There was some error!";
		}
	}

	if ($msg != NULL) {
?>
        <div class="alert alert-success fade in alert-dismissible"><center><?php echo $msg; ?></center></div>
<?php
  	}

	if ($error != NULL) {
?>
        <div class="alert alert-warning fade in alert-dismissible"><center><?php echo $error; ?></center></div>
<?php
  	}
?>

<div class="container">
	<div class="row">
		<h3 class="text-center">Contact Us</h3>
		<div class="col-md-4 col-md-offset-4">
			<div class="well">
				<form method="post" action="">
					<div class="form-group">
						<label>Name</label>
						<input type="text_field" class="form-control" name="name">
						
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="text_field" class="form-control" name="email" required>
					</div>
					<div class="form-group">
						<label>Comments</label>
						<textarea class="form-control" rows="3" name="comment" required></textarea>
					</div>
					<div class="text form-group">
						<input type="submit" name="submit" class="btn btn-default" />
					</div>
				</form>	
			</div>
		</div>
	</div>
</div>

			
<?php
include 'layout/footer.php';
?>