<!DOCTYPE html>
<html>
	<head>
		<?php
			require_once 'header.php';
			require_once 'navigation.php';
		?>
		<link rel="stylesheet" href="..\style.css">
	</head>
	<body>
		<form method="Post" action="uploadPicture.php">
			<input type="file" name="file">
			<input type="submit">
		</form>
	</body>
</html>