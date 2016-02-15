<?php
	require_once "index.logic.php";
	include "../common/header.php";

	$Query = $db->prepare("
		SELECT id,species
		FROM clients,patient
		");

	$Query->execute([
		]);

	$clients = $Query->fetchAll();
	foreach($clients as $client)

?>



<h1>Species</h1>
<p class="options"><a href="create.php">create</a></p>
<table>
	<thead>
		<tr>
			<th>Species</th>
		</tr>
	</thead>
</tbody>


<?php foreach($clients as $client): ?>
	<tr>
		<td><?=$client['species']?></td>
		<td><?=$patient['species']?></td>
		<td class="center"><a href="edit.php?id=<?=$client['id']?>">Edit</a></td>
		<td class="center"><a href="delete.php?id=<?=$client['id']?>">Delete</a></td>
	</tr>
<?php endforeach; ?>


	</tbody>
</table>
	
<?php
	include "../common/footer.php";
?>