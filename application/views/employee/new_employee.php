<div class="title-top">
	<h2>New Employee</h2>
	<a class="btn btn-primary" href="<?php echo base_url('index.php/Employee/'); ?>" role="button">All Employee</a>
</div>

<form method="post" action="<?php echo base_url('productsCreate');?>">
	<div class="form-group">
		<input type="text" class="form-control" id="firstname" placeholder="First Name">
	</div>

	<div class="form-group">
		<input type="text" class="form-control" id="lastname" placeholder="Last Name">
	</div>

	<div class="form-group">
		<input type="email" class="form-control" id="email" placeholder="Email Aaddress">
	</div>

	<div class="form-group">
		<label for="firstname">Gender</label>
		<div class="form-check form-check-inline">
			<input class="form-check-input" type="radio" name="gender" value="male" checked>
			<label class="form-check-label" for="inlineRadio1">Male</label>
		</div>

		<div class="form-check form-check-inline">
			<input class="form-check-input" type="radio" name="gender" value="female">
			<label class="form-check-label" for="inlineRadio2">Female</label>
		</div>
	</div>

	<div class="form-group">
		<input class="btn btn-primary" type="submit" value="Submit">
	</div>
</form>

