<html>
	<head>
		<title>Server Variables</title>
	</head>
	<body>
		<?php
			$var1=1;
			function test1(){
				$var1=2;
				echo "{$var1}<br>";
			}
			echo "{$var1}<br>";
			test1();
			echo "{$var1}<br>";
			echo "<hr>";
			$var2=1;
			function test2(){
				global $var2;
				$var2=2;
				echo "{$var2}<br>";
			}
			echo "{$var2}<br>";
			test2();
			echo "{$var2}<br>";
			echo "<hr>";
			$var3=1;
			function test3(){
				static $var3 = 2;
				echo "{$var3}<br>";
				$var3++;
			}
			echo "{$var3}<br>";
			test3();
			test3();
			test3();
			test3();
			echo "{$var3}<br>";

		?>
	</body>
</html>