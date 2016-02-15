<?php

require_once 'init.php';

if(isset($_POST['name'])) {
	$name = trim($_POST['name']);

	if(!empty($name)) {
		$addedQuery = $db->prepare("
		INSERT INTO clients (name)
		VALUES (:name)
		");


		$addedQuery->execute([
			'name' => $name,
		]);
	}
}

header('Location: index.php');