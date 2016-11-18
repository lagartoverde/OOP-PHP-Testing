<html>
	<head>
		<title>Server Variables</title>
	</head>
	<body>
		<?php
			echo "Server Details: <br>";
			echo "SERVER_NAME: {$_SERVER['SERVER_NAME']} <br>";
			echo "SERVER_ADDR: {$_SERVER['SERVER_ADDR']} <br>";
			echo "SERVER_PORT: {$_SERVER['SERVER_PORT']} <br>";
			echo "DOCUMENT_ROOT: {$_SERVER['DOCUMENT_ROOT']} <br>";

			echo "<br>";
			echo "Page Details: <br>";
			echo "PHP_SELF: {$_SERVER['PHP_SELF']} <br>";
			echo "SCRIPT_FILENAME: {$_SERVER['SCRIPT_FILENAME']} <br>";
		?>
	</body>
</html>