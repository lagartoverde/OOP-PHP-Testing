<html>
	<head>
		<title>Dates and Times</title>
	</head>
	<body>
		<?php
			echo time();
			echo "<br>";
			echo mktime(2,30,45,30,1,2009);
			echo "<br>";
			echo checkdate(12, 31, 2000)? 'true':'false';
			echo "<br>";
			echo checkdate(2, 31, 2000)? 'true':'false';
			echo "<br>";
			$unix_timestamp=strtotime("15 September 2004");
			echo $unix_timestamp;
			echo "<br>";
			$unix_timestamp=strtotime("yesterday");
			echo $unix_timestamp;
			echo "<br>";
			$unix_timestamp=strtotime("now");
			echo $unix_timestamp;
			echo "<br>";
			$unix_timestamp=strtotime("last monday");
			echo $unix_timestamp;
			echo "<br>";
		?>
	</body>
</html>