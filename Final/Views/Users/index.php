

	<h2>
		List of Users
	</h2>
	<table class="table table-striped table-bordered table-hover">
		<thead>
			<tr>
				<th>FirstName</th>
				<th>LastName</th>
				<th>Password</th>
				<th>fbid</th>
				<th>UserType</th>
			</tr>
		</thead>
		<tbody>
			
			<? foreach ($model as $row): ?>
				<tr>
					<td><?=$row['FirstName']?></td>
					<td><?=$row['LastName']?></td>
					<td><?=$row['Password']?></td>
					<td><?=$row['fbid']?></td>
					<td><?=$row['UserType']?></td>
				</tr>
			<? endforeach; ?>
			
		</tbody>
	</table>