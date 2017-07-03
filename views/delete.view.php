<?php require 'partials/header.php'; ?>
<h1>DELETE</h1>
	<form action="../crud-mvc/delete" method="POST" accept-charset="utf-8">
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
			<button type="submit" class="form-control" style="width:10%; margin:0 auto">Delete</button>
	</form>
<?php require 'partials/footer.php'; ?>