<?php
	$title = "Home";
	include 'layout/header.php';
	if(!isset($_SESSION['name'])) {
    	$msg = "Cannot view This page! Login to Continue!";
    	echo "<script>window.location.replace('login.php?msg=$msg');</script>";
  	}

  	$dev = $_GET['dev'];
  	$ent = $_GET['ent'];

  	if (isset($_POST['search'])) {
  		$var = $_POST['searchDeveloper'];
  		echo "<script>window.location.replace('home_search.php?dev=$var&ent=$ent');</script>";
  	}
  	if (isset($_POST['entrep'])) {
  		$var = $_POST['searchEntrepreneur'];
  		echo "<script>window.location.replace('home_search.php?dev=$dev&ent=$var');</script>";
  	}
?>
<style type="text/css">
	.search {
		width: 40%;
	}
</style>
<div class="margin"></div>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-4">
			<div class="well">
				<h3 class="text-center">Entrepreneur</h3>
				<form class="form-inline" method="post" style="float: right">
					<input type="text" name="searchEntrepreneur" class="form-control" placeholder="Search for Idea" alt="Search for Idea">
					<button class="btn" name="entrep">Search</button>
				</form>
				<br><br>
				<ol>
					<?php
						$query1 = "SELECT * FROM user WHERE role = 'entrepneur'";
						$result1 = mysqli_query($conn,$query1);
						while($row1 = mysqli_fetch_assoc($result1)) {
							$id = $row1['id'];
							if ($ent == NULL) {
								$query2 = "SELECT * FROM user_details WHERE uid = '$id'";
							} else {
								$query2 = "SELECT * FROM user_details WHERE uid = '$id' AND idea LIKE '%$ent%'";
							}
							$result2 = mysqli_query($conn,$query2);
							$row2 = mysqli_fetch_assoc($result2);

							$num0 = mysqli_num_rows($result2);

							if ($num0 != 0):
					?>
					<li><a href="home_view.php?id=<?php echo($row2['id']) ?>" onclick="on()">
						<?php 
							if ($row2['image'] != NULL) {
						?>
								<img src="user_image/<?php echo($row2['image']) ?>" style="height: 70px" class="avatar img-circle img-thumbnail" alt="avatar">
						<?php
							} else {
						?>
								<img src="user_image/default.png" style="height: 70px" class="avatar img-circle img-thumbnail" alt="avatar">
						<?php 
							}
							 echo $row2['fname']." ".$row2['lname'];?>
						</a>
					</li>
				<?php
						endif;
						} 
				?>
				</ol>
			</div>
		</div>
		<div class="col-md-4">
			<div class="well">
				<h3 class="text-center">Developer</h3>
				<form class="form-inline" method="post" style="float: right">
					<input type="text" name="searchDeveloper" class="form-control" placeholder="Search for Developer according to Skills" alt="Search for Developer according to Skills">
					<input type="submit" name="search" value="Search" class="btn">
				</form>
				<br><br>
				<ol>
					<?php
						$query3 = "SELECT * FROM user WHERE role = 'developer'";
						$result3 = mysqli_query($conn,$query3);
						while($row3 = mysqli_fetch_assoc($result3)) {
							$id = $row3['id'];
							if ($dev == NULL) {
								$query4 = "SELECT * FROM user_details WHERE uid = '$id'";
							} else {
								$query4 = "SELECT * FROM user_details WHERE uid = '$id' AND skill LIKE '%$dev%'";
							}
							$result4 = mysqli_query($conn,$query4);
							$num = mysqli_num_rows($result4);
							$row4 = mysqli_fetch_assoc($result4);
							if ($num != 0) :
					?>
					<li><a href="home_view.php?id=<?php echo($row4['id']) ?>" onclick="on()">
						<?php 
							if ($row4['image'] != NULL) {
						?>
								<img src="user_image/<?php echo($row4['image']) ?>" style="height: 70px" class="avatar img-circle img-thumbnail" alt="avatar">
						<?php
							} else {
						?>
								<img src="user_image/default.png" style="height: 70px" class="avatar img-circle img-thumbnail" alt="avatar">
						<?php 
							}
							 echo $row4['fname']." ".$row4['lname'];?>
						</a>

					</li>
				<?php
						endif; 
					}
				?>
				</ol>
			</div>
		</div>
		<div class="col-md-4">
			<div class="well">
				<h3 class="text-center">Sponser</h3>
				</form>
				<br><br>
				<ol>
					<?php
						$query5 = "SELECT * FROM user WHERE role = 'sponser'";
						$result5 = mysqli_query($conn,$query5);
						while($row5 = mysqli_fetch_assoc($result5)) {
							$id = $row5['id'];
							$query6 = "SELECT * FROM user_details WHERE uid = '$id'";
							$result6 = mysqli_query($conn,$query6);
							$row6 = mysqli_fetch_assoc($result6);
					?>
					<li><a href="home_view.php?id=<?php echo($row6['id']) ?>" onclick="on()">
						<?php 
							if ($row6['image'] != NULL) {
						?>
								<img src="user_image/<?php echo($row6['image']) ?>" style="height: 70px" class="avatar img-circle img-thumbnail" alt="avatar">
						<?php
							} else {
						?>
								<img src="user_image/default.png" style="height: 70px" class="avatar img-circle img-thumbnail" alt="avatar">
						<?php 
							}
							 echo $row6['fname']." ".$row6['lname'];?>
						</a>
					</li>
				<?php } ?>
				</ol>
			</div>
		</div>
	</div>
</div>
