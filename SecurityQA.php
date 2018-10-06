<?php
	$title = "Security Questions";
	include 'layout/header.php';
	$id = $_GET['id'];
	$q1 = "What was your first nickname?";
	$q2 = "Where were you born?";

	if (isset($_POST['submit'])) {
		$a1 = $_POST['ans1'];
		$a2 = $_POST['ans2'];

		$query = "INSERT INTO `securityqa`(`uid`, `question1`, `answer1`, `question2`, `answer2`) VALUES ('$id','$q1','$a1','$q2','$a2')";
		$result = mysqli_query($conn, $query) or die("error2");

		$query1 = "SELECT * FROM user WHERE id = '$id'";
		$result1 = mysqli_query($conn, $query1) or die("error");

		$row = mysqli_fetch_assoc($result1);

		$_SESSION['id'] = $id;
		$_SESSION['role'] = $row['role'];
		$_SESSION['name'] = $row['username'];
?>
		<div class="alert alert-success" onclick="myfunction()"><center>User Registration Successfull! Click here to continue..</center></div>
<?php
	}
?>

<div class="container">
	<div class="row">
		<form method="post" action="">
			<h3 class="text-center" id="text">Answer The Following Questions</h3>
			<div class="col-md-4 col-md-offset-4">
				<div class="well">
					<div class="form-group">
						<label><?php echo $q1 ?></label>
						<input type="text" name="ans1" class="form-control" required>
					</div>
					<div class="form-group">
						<label><?php echo $q2 ?></label>
						<input type="text" name="ans2" class="form-control" required>
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

<script type="text/javascript">
	function myfunction() {
		window.location.replace('profile.php?id=<?php echo($id) ?>');
	}
</script>