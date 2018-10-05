<?php
	$title = "Security Question";
	include 'layout/header.php';
	$id = $_GET['id'];

	$query = "SELECT * FROM securityqa where uid = '$id'";
	$result = mysqli_query($conn, $query);

	$row = mysqli_fetch_assoc($result);
	$cans1 = $row['answer1'];
	$cans2= $row['answer2'];

	if (isset($_POST['submit'])) {
		$ans1 = $_POST['ans1'];
		$ans2 = $_POST['ans2'];

		if ($ans1 == $cans1 && $ans2 == $cans2) {
			echo "<script>window.location.replace('updatePassword.php?id=$id');</script>";
		} elseif ($ans1 != $cans1) {
			$error = "Wrong Answer of Question 1!";
		}  elseif ($ans2 != $cans2) {
			$error = "Wrong Answer of Question 2!";
		} else {
			$error = "Wrong Answer of Both Question!";
		}
	}
?>

<div class="container">
	<div class="row">
		<div class="margin"></div>
		<form method="post" action="">
			<div class="col-md-4 col-md-offset-4">
				<div class="well">
					<div class="form-group">
						<label><?php echo $row['question1'] ?></label>
						<input type="text" name="ans1" class="form-control" required>
					</div>
					<div class="form-group">
						<label><?php echo $row['question2'] ?></label>
						<input type="text" name="ans2" class="form-control" required>
					</div>
					<div class="text form-group">
						<input type="submit" name="submit" value="Submit" class="btn btn-default">
					</div>
				</div>
			</div>
		</form>
	</div>
</div>

<?php
	include 'layout/footer.php';
?>