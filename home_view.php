<?php
	$title = "Home";
	include 'layout/header.php';
	if(!isset($_SESSION['name'])) {
    	$msg = "Cannot view This page! Login to Continue!";
    	echo "<script>window.location.replace('login.php?msg=$msg');</script>";
  	}

  	$pid = $_GET['id'];

  	$query0  = "SELECT * FROM user_details where id = '$pid'";
  	$result0 = mysqli_query($conn, $query0);

  	$row0 = mysqli_fetch_assoc($result0);

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
				<h3 class="text-center">Entrepneur</h3>
				<form class="form-inline" style="float: right">
					<input type="text" name="searchDeveloper" class="form-control" placeholder="Search for Idea" alt="Search for Idea">
					<button class="btn" name="search">Search</button>
				</form>
				<br><br>
				<ol>
					<?php
						$query1 = "SELECT * FROM user WHERE role = 'entrepneur'";
						$result1 = mysqli_query($conn,$query1);
						while($row1 = mysqli_fetch_assoc($result1)) {
							$id = $row1['id'];
							$query2 = "SELECT * FROM user_details WHERE uid = '$id'";
							$result2 = mysqli_query($conn,$query2);
							$row2 = mysqli_fetch_assoc($result2);
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
				<?php } ?>
				</ol>
			</div>
		</div>
		<div class="col-md-4">
			<div class="well">
				<h3 class="text-center">Developer</h3>
				<form class="form-inline" style="float: right">
					<input type="text" name="searchDeveloper" class="form-control" placeholder="Search for Developer according to Skills" alt="Search for Developer according to Skills">
					<button class="btn" name="search">Search</button>
				</form>
				<br><br>
				<ol>
					<?php
						$query3 = "SELECT * FROM user WHERE role = 'developer'";
						$result3 = mysqli_query($conn,$query3);
						while($row3 = mysqli_fetch_assoc($result3)) {
							$id = $row3['id'];
							$query4 = "SELECT * FROM user_details WHERE uid = '$id'";
							$result4 = mysqli_query($conn,$query4);
							$row4 = mysqli_fetch_assoc($result4);
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
				<?php } ?>
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

<!-- java script -->
<script>
	function on() {
    	document.getElementById("overlay").style.display = "block";
    }

	function off() {
    	window.location.replace('home.php');
	}
</script>

<div id='overlay' onclick="off()">
	<div class="container bootstrap snippet">
		<div class="row">
			<div class="col-sm-3">
				<div class="margin"></div>
				<div class="text-center">
					<?php 
						if ($row0['image'] != NULL) { 
					?>
							<img src="user_image/<?php echo($row0['image']) ?>" class="avatar img-circle img-thumbnail" alt="avatar">
					<?php 
						} else {
					?>
							<img src="user_image/default.png" class="avatar img-circle img-thumbnail" alt="avatar">
					<?php
						} 
					?>
					
				</div>
			</div>
			<div class="col-sm-9">
				<div class="margin"></div>
				<div class="tab-content">
				<div class="form-group">
        		<div class="col-xs-6">
            		<label for="first_name"><h4>First Name</h4></label>
            		<p><?php echo $row0['fname']; ?></p>                
        		</div>
    		<div class="form-group">
        		<div class="col-xs-6">
            		<label for="last_name"><h4>Last Name</h4></label>
            		<p><?php echo $row0['lname']; ?></p>           
        		</div>
    		</div>

    		<?php if ($row0['organization'] != NULL): ?>
    		<div class="form-group">
        		<div class="col-xs-6">
            		<label for="last_name"><h4>Organization</h4></label>
            		<p><?php echo $row0['organization']; ?></p>            
        		</div>
    		</div>
    		<?php endif ?>

    		<?php if ($row0['phone'] != NULL): ?>
    		<div class="form-group">
        		<div class="col-xs-6">
            		<label for="last_name"><h4>Phone</h4></label>
            		<p><?php echo $row0['phone']; ?></p>
       		 	</div>
    		</div>
    		<?php endif ?>

    		<?php if ($row0['idea'] != NULL): ?>
    		<div class="form-group">
        		<div class="col-xs-6">
            		<label for="last_name"><h4>Idea</h4></label>
            		<p><?php echo $row0['idea']; ?></p>           
        		</div>
    		</div>
    		<?php endif ?>

    		<?php if ($row0['skill'] != NULL): ?>
    		<div class="form-group">
        		<div class="col-xs-6">
            		<label for="last_name"><h4>Skills</h4></label>
            		<p><?php echo $row0['skill']; ?></p>           
        		</div>
    		</div>
    		<?php endif ?>

    		<?php if ($row0['github'] != NULL): ?>
    		<div class="form-group">
        		<div class="col-xs-6">
            		<label for="last_name"><h4>Github</h4></label>
            		<p><a style="color: white;" href="<?php echo $row0['github']; ?>" target="_blank"><u>View Github Profile</u></a></p>
        		</div>
    		</div>
    		<?php endif ?>

			<?php if ($row0['linkedin'] != NULL): ?>
			<div class="form-group">
        		<div class="col-xs-6">
            		<label for="last_name"><h4>Linkedin</h4></label>
            		<p><a href="<?php echo $row0['linkedin']; ?>" style="color: white"><u>View Linkedin Profile</u></a></p>
        		</div>
    		</div>
    		<?php endif ?>

    		<div class="form-group">
        		<div class="col-xs-6">
            		<label for="last_name"><h4>About me</h4></label>
            		<p><?php echo $row0['description']; ?></p>
        		</div>
    		</div>
    	</div>
    </div>
</div>
</div>
<div class="margin"></div>
</div>

<style>
#overlay {
    position: absolute;
    transform: translate(-50%, -50%);
    top: 50%;
    left: 50%;
    background-color: rgba(0,0,0,0.5);
    z-index: 2;
    cursor: pointer;
    color: white;
}
</style>