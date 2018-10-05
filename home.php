<?php
	$title = "Home";
	include 'layout/header.php';
	if(!isset($_SESSION['name'])) {
    	$msg = "Cannot view This page! Login to Continue!";
    	echo "<script>window.location.replace('login.php?msg=$msg');</script>";
  	}

  	$certid = NULL;
  	$search = NULL;

  	if (isset($_POST['search'])) {
  		$var = $_POST['searchDeveloper'];
  		$search = true;


  	}
?>
<style type="text/css">
	.search {
		width: 40%;
	}
	span.popup {
  		height: 0;
  		color: #000;
  		position: relative;
  		cursor: pointer;

  		&:after {
    		content: attr(data-popuptext);
    		background: black;
    		border-radius: 3px;
    		opacity: 0;
    		top: 0;
    		left: 0;
    		position: absolute;
    		transition: 500ms ease;
    		white-space: nowrap;
    		max-height: 0;
  		}
  
  		&:hover:after {
    		opacity: 1;
    		top: 1.2em;
    		max-height: 200px;
    		padding: .4em;
  		}
	}
</style>
<div class="margin"></div>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-4">
			<div class="well">
				<h3 class="text-center">Entrepneur</h3>
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
					<div id="a1" class="hidden" style="width:1000px;">
						<div class="popover-body">
						<table class="table" width="100%">
							<tr>
								<td>First Name : </td>
								<td></td>
								<td><?php echo $row2['fname']; ?></td>
							</tr>
							<tr>
								<td>Last Name : </td>
								<td></td>
								<td><?php echo $row2['lname']; ?></td>
							</tr>
							<tr>
								<td>Phone Number : </td>
								<td></td>
								<td><?php echo $row2['phone']; ?></td>
							</tr>
							<tr>
								<td>About Me : </td>
								<td></td>
								<td><?php echo $row2['description']; ?></td>
							</tr>
						</table>
						</div>
					</div>
					<li>
						<a href="#" class="btn" tabindex="0" data-toggle="popover" rel="popover" data-placement="bottom" data-trigger="focus" data-popover-content="#a1" data-placement="bottom">
							<img src="user_image/<?php echo($row2['image']) ?>" height= 95px> <?php echo $row2['fname']." ".$row2['lname'];?>
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
					<div id="a2" class="hidden" style="width:1000px;">
						<div class="popover-body">
						<table class="table" width="100%">
							<tr>
								<td>First Name : </td>
								<td></td>
								<td><?php echo $row4['fname']; ?></td>
							</tr>
							<tr>
								<td>Last Name : </td>
								<td></td>
								<td><?php echo $row4['lname']; ?></td>
							</tr>
							<tr>
								<td>Phone Number : </td>
								<td></td>
								<td><?php echo $row4['phone']; ?></td>
							</tr>
							<tr>
								<td>Skills : </td>
								<td></td>
								<td><?php echo $row4['skill']; ?></td>
							</tr>
							<tr>
								<td colspan="3"><a href="<?php echo $row4['github'];?>" target="_blank">View Github Profile</td>

							</tr>
							<tr>
								<td colspan="3"><a href="<?php echo $row4['linkedin']; ?>" target="_blank">View Linkedin Profile</td>
							</tr>
							<tr>
								<td>About Me : </td>
								<td></td>
								<td><?php echo $row4['description']; ?></td>
							</tr>
						</table>
						</div>
					</div>
					<li>
						<a href="#" class="btn" tabindex="0" data-toggle="popover" rel="popover" data-placement="bottom" data-trigger="focus" data-popover-content="#a2" data-placement="bottom">
							<img src="user_image/<?php echo($row4['image']) ?>" height= 95px> <?php echo $row4['fname']." ".$row4['lname'];?>
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
					<li>
						<a href="#" class="btn" onclick="on()">
							<img src="user_image/<?php echo($row6['image']) ?>" height= 95px> <?php echo $row6['fname']." ".$row6['lname'];?>
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
    	document.getElementById("overlay").style.display = "none";
	}
</script>


<div id='overlay' onclick="off()">
	<div class="container bootstrap snippet">
		<div class="row">
			<div class="col-sm-3">
				<div class="text-center">
					<img src="user_image/default.png" class="avatar img-circle img-thumbnail" alt="avatar">
				</div>
			</div>
		</div>
		<div class="tab-content">
			<div class="form-group">
        		<div class="col-xs-6">
            		<label for="first_name"><h4>First Name</h4></label>
            		<p>heha</p>                
        		</div>
    		</div>

    		<div class="form-group">
        		<div class="col-xs-6">
            		<label for="last_name"><h4>Last Name</h4></label>
            		<p>heha</p>           
        		</div>
    		</div>

    		<div class="form-group">
        		<div class="col-xs-6">
            		<label for="last_name"><h4>Organization</h4></label>
            		<p>heha</p>            
        		</div>
    		</div>

    		<div class="form-group">
        		<div class="col-xs-6">
            		<label for="last_name"><h4>Phone</h4></label>
            		<p>heha</p>
       		 	</div>
    		</div>

    		<div class="form-group">
        		<div class="col-xs-6">
            		<label for="last_name"><h4>Skills</h4></label>
            		<p>heha</p>           
        		</div>
    		</div>

    		<div class="form-group">
        		<div class="col-xs-6">
            		<label for="last_name"><h4>Github</h4></label>
            		<p>heha</p>
        		</div>
    		</div>

    		<div class="form-group">
        		<div class="col-xs-6">
            		<label for="last_name"><h4>Linkedin</h4></label>
            		<p>heha</p>
        		</div>
    		</div>

    		<div class="form-group">
        		<div class="col-xs-6">
            		<label for="last_name"><h4>About me</h4></label>
            		<p>heha</p>
        		</div>
    		</div>
    	</div>
    </div>
</div>

<style>
#overlay {
    position: absolute;
    transform: translate(-50%, -50%);
    display: none;
    top: 50%;
    left: 50%;
    background-color: rgba(0,0,0,0.5);
    z-index: 2;
    cursor: pointer;
    color: white;
}
</style>