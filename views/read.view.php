<?php require 'partials/header.php'; ?>

<h1>READ</h1>

	<table class="table-striped table table-condensed" style="font-size:13px;">
		<thead>
			<tr>
				<th>ID</th>
				<th>Username</th>
				<th>Password</th>
				<th>Email</th>
				<th>Firstname</th>
				<th>Lastname</th>
				<th>Gender</th>
				<th>Birthdate</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($data as $row) :?>
				<tr>
				<?php foreach($row as $data) :?>
						<td><?=$data;?></td>
				<?php endforeach; ?>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>

<?php require 'partials/footer.php'; ?>