<!DOCTYPE html>
<html>
	<head>
		<!--<meta charset 8UTF>-->
	</head>
	<body>
		<form action="credential.php" method="post">
			Name: <input type="text">
				<br>
			Email: <input type="text" name="email">
				<br>
			<input type="submit">
		</form>
		<br> Your name is
		<?php
			echo $_GET["username"]		
		
		?>
		<footer>
		</footer>
	</body>
</html>
