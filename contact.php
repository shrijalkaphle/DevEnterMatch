<?php
	$title = "Contact";
	include 'layout/header.php';
?>
<div class="container">
	<div class="row">
		<h3 class="text-center">Contact Us</h3>
		<div class="col-md-4 col-md-offset-4">
			<div class="well">
				<form>
					<div class="form-group">
						<label>name</label>
						<input type="text_field" class="form-control">
						
					</div>
					<div class="form-group">
						<label>email</label>
						<input type="text_field" class="form-control">
					</div>
					<div class="form-group">
						<label>comments</label>
						<textarea class="form-control" rows="3"></textarea>

						<div class="text form-group">
							<input type="submit" class="btn btn-default">
						</div>
						
					</div>
					
				</div>
			</div>
		</div>
	</div>
</form>
<?php
include 'layout/footer.php';
?>