<html>
	<head>
		<title>Dates and Times: Formatting</title>
	</head>
	<body>
		<?php
			$timestamp=mktime(0,0,0,1,10,2010);
			echo strftime("The date is %d/%m/%y",$timestamp);
			echo "<br>";
			echo strips_zeros_for_date(strftime("The date is *%d/*%m/%y",$timestamp));

			function strips_zeros_for_date($marked_string=""){
				$no_zeros=str_replace("*0","",$marked_string);
				$clean_string=str_replace("*", "", $no_zeros);
				return $clean_string;
			}

			echo "<hr>";
			$dt=time();
			$mysql_datetime=strftime("%Y-%m-%d %H:%M:%S",$dt);
			echo $mysql_datetime;
		?>
	</body>
</html>