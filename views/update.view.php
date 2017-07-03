<?php require 'partials/header.php'; ?>
<h1>UPDATE</h1>
	<form action="../crud-mvc/update" method="post" accept-charset="utf-8">
		<div class="col-md-12">
			<div class="form-group col-md-6" >
				Username:<br>
				<input type="text" name="username" class=" form-control" required placeholder="Username">			
			</div>
			<div class="form-group col-md-6">
				Password:<br>
				<input type="password" name="password" class=" form-control" required placeholder="Password">
			</div>
		</div>
		<div class="col-md-12">
			<div class="form-group col-md-12">
				Email:<br>
				<input type="email" name="email" class="emCheck form-control" required placeholder="Email">
			</div>
		</div>
		<div class="col-md-12">
			<div class="form-group col-md-6">
				Firstname:<br>
				<input type="text" name="firstname" class="emCheck form-control" required placeholder="Firstname">
			</div>
			<div class="form-group col-md-6">
				Lastname: <br>
				<input type="text" name="lastname" class="emCheck form-control" required placeholder="Lastname">
			</div>
		</div>
		<div class="col-md-12">
			<div class="form-group col-md-12">
				Birthdate: <br>
				<input type="date" name="birthdate" class="emCheck form-control" required ">
			</div>
		</div>
		<div class="col-md-12">
			<div class="checkbox col-md-12">
				Gender: <br>
				<label><input type="radio" name="gender" id="check" value="female" >Female</label><br>
				<label><input type="radio" name="gender" id="check" value="male" >Male</label>
			</div>
			<div >
				<input type="submit" name="submit" class="form-control" style="width: 10%; margin: 0 auto;">
			</div>
		</div>
	</form>	
<?php require 'partials/footer.php'; ?>