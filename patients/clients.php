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


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Clients</title>
	<link rel="stylesheet" href="">
</head>
<body>

<form method="post" action="clients.logic.php">	
<p> Select A Client:
<select name="clients">
<?php foreach ($clients as $client): ?>
	<option value="clients"> <?php echo $client['name']; ?> </option>
<?php endforeach; ?>	
</select>	


<label></label>
<input type="submit" value="Save">
</form>



</body>
</html>