<?php

require_once 'init.php';

if(isset($_GET['as'], $_GET['client'])) {
	$as	  = $_GET['as'];
	$client = $_GET['client'];

	switch($as) {
		case 'done':
			$doneQuery = $db->prepare("
				DELETE FROM clients
				WHERE id =  :client
			");

			$doneQuery->execute([
				'client' => $client,
			]);
		break;
	}
}

header('Location: index.php');