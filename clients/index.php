<?php
	require_once 'init.php';
	include "../common/header.php";

	$clientsQuery = $db->prepare("
		SELECT id,name,species,status
		FROM clients
		");

	$clientsQuery->execute([
		]);

	$clients = $clientsQuery->fetchAll();
	foreach($clients as $client)

?>






	<h1>Clients</h1>
	<p class="options"><a href="create.php">create</a></p>
	<table>
		<thead>
			<tr>
				<th>Name</th>
				<th>Species</th>
				<th>Status</th>
				<th></th>
				<th></th>
			</tr>
		</thead>
		</tbody>
<?php
	foreach($clients as $client):
?>
			<tr>
				<td><?=$client['name']?></td>
				<td><?=$client['species']?></td>
				<td><?=$client['status']?></td>
				<td class="center"><a href="edit.php?id=<?=$client['id']?>">edit</a></td>
				<td class="center"><a href="delete.php?as=done&client=<?=$client['id']?>">delete</a></td>
			</tr>

<?php
	endforeach;
?>
		</tbody>
	</table>
	
<?php
	include "../common/footer.php";
?>