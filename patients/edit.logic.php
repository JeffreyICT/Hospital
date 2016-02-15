<?php
require_once 'init.php';

	$clientsQuery = $db->prepare("
		SELECT id,name,species,status
		FROM clients
		");

	$clientsQuery->execute([
		]);

	$clients = $clientsQuery->fetchAll();
	foreach($clients as $client)

?>


<?php
	if ($_SERVER["REQUEST_METHOD"] == "GET"):
		$patient = NULL;
		if (isset($_GET['id'])):
			$db = new mysqli('localhost','root','','hospital');
			$id = $db->escape_string($_GET["id"]);
			
			$query = "select * from patient where id=$id";
			$result = $db->query($query);
		
			$patient = $result->fetch_assoc();		
		endif;
		if ($patient == NULL):
			http_response_code(404);
			include("../common/not_found.php");
			exit();
		endif;
	elseif ($_SERVER["REQUEST_METHOD"] == "POST"):
		$db = new mysqli('localhost','root','','hospital');
		
		$id = $db->escape_string($_POST["id"]);
		$name = $db->escape_string($_POST["name"]);
		$species = $db->escape_string($_POST["species"]);
		$status = $db->escape_string($_POST["status"]);
		
		$query = "update patient set name='$name', species='$species', status='$status' where id=$id";
		$result = $db->query($query);
	
    header("Location: ./");
    exit();
	endif;

?>