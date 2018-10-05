<?php
	$title = "Conform Profile";
	include 'layout/header.php';

	$id = $_GET['id'];

	$query = "SELECT * FROM user_details where uid = '$id'";
	$result = mysqli_query($conn, $query);

	$row = mysqli_fetch_assoc($result);

	$query1 = "SELECT * FROM user WHERE id = '$id'";
	$result1 = mysqli_query($conn, $query1);

	$row1 = mysqli_fetch_assoc($result1);

	if (isset($_POST['submit'])) {
		echo "<script>window.location.replace('question.php?id=$id');</script>";
	}
?>

<div class="container">
	<div class="row">
		<div class="margin"></div>
		<form method="post" action="">
			<div class="col-md-4 col-md-offset-4">
				<div class="well">
					<table class="table borderless">
						<tr>
							<?php
								if ($row['image'] == NULL) {
							?>
									<td rowspan="2"><img src="user_image/default.png" height=95px></td>
							<?php
								} else {
							?>
									<td rowspan="2"><img src="user_image/<?php echo($row['image'])?>" height=95px></td>
							<?php
								}
							?>
							<td></td>
							<?php
								if ($row['fname'] == NULL) {
							?>
									<td><b>Username :</b> <?php echo($row1['username']);?></td>
							<?php
								} else {
							?>
									<td><b>Full Name :</b> <?php echo($row['fname']." ".$row['lname']);?></td>
							<?php
								}
							?>
						</tr>
						<tr>
							<td></td>
							<td><b>E-mail :</b> <?php echo $row1['email']; ?></td>
						</tr>
					</table>
					<div class="text form-group">
						<input type="submit" name="submit" value="Yes" class="btn btn-default">
						<br>
						<p style="float: right"><a href="forget.php">Not my account.</a></p>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>
</body>
