<?php

require_once 'init.php';

if(isset($_POST['clients'])) {
	$name = $_POST['clients'];

	if(!empty($name)) {
		$addedQuery = $db->prepare("
		INSERT INTO patient (clients)
		VALUES (:clients)
		");


		$addedQuery->execute([
			'clients' => $patient,
		]);
	}
}

header('Location: index.php');