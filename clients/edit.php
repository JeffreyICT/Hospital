<?php
	require_once "edit.logic.php";
	include "../common/header.php";
?>
	<h1>Edit patiënt</h1>
	<form method="post">
		<div>
			<input type="hidden" name="id" value="<?=$client['id']?>">
			<label for="name">Name:</label>
			<input type="text" id="name" name="name" value="<?=$client['name']?>"<?=$client['name']?>>
		</div>
		<div>
			<label for="name">Species:</label>
			<textarea id="species" name="species"><?=$client['species']?></textarea>
		</div>
		<div>
			<label for="name">Status:</label>
			<textarea id="status" name="status"><?=$client['status']?></textarea>
		</div>
		<div>
			<label></label>
			<input type="submit" value="Save">
		</div>
	</form>
<?php
	include "../common/footer.php";
?>