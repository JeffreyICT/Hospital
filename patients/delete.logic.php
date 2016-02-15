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
		if (isset($_POST['confirmed'])):
			$db = new mysqli('localhost','root','','hospital');
		
			$id = $db->escape_string($_POST["id"]);
	
			$query = "delete from patient where id=$id";
			$result = $db->query($query);
		endif;
		
		header('Location: index.php');
		exit();
	endif;

?>