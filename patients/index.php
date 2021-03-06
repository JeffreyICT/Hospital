<?php
	require_once "index.logic.php";
	include "../common/header.php";
?>
	<h1>Patiënts</h1>
	<p class="options"><a href="create.php">create</a></p>
	<table>
		<thead>
			<tr>
				<th>Name</th>
				<th>Species</th>
				<th>Status</th>
				<th>Client</th>
				<th></th>
				<th></th>
				<th></th>
			</tr>
		</thead>
		</tbody>

<?php
	foreach($patients as $patient):
?>
			<tr>
				<td><?=$patient['name']?></td>
				<td><?=$patient['species']?></td>
				<td><?=$patient['status']?></td>
				<td><?=$clients['name']?></td>
				<td class="center"><a href="edit.php?id=<?=$patient['id']?>">Edit</a></td>
				<td class="center"><a href="delete.php?id=<?=$patient['id']?>">Delete</a></td>
			</tr>

<?php
	endforeach;
?>
		</tbody>
	</table>
	
<?php
	include "../common/footer.php";
?>