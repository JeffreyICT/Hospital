<?php
	if ($_SERVER["REQUEST_METHOD"] == "GET"):
		$client = NULL;
		if (isset($_GET['id'])):
			$db = new mysqli('localhost','root','','hospital');
			$id = $db->escape_string($_GET["id"]);
			
			$query = "select * from clients where id=$id";
			$result = $db->query($query);
		
			$client = $result->fetch_assoc();		
		endif;
		if ($client == NULL):
			http_response_code(404);
			include("../common/not_found.php");
			exit();
		endif;
	elseif ($_SERVER["REQUEST_METHOD"] == "POST"):
		if (isset($_POST['confirmed'])):
			$db = new mysqli('localhost','root','','hospital');
		
			$id = $db->escape_string($_POST["id"]);
	
			$query = "delete from clients where id=$id";
			$result = $db->query($query);
		endif;
		
		header('Location: index.php');
		exit();
	endif;

?>