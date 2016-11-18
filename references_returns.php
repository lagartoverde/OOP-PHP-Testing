<html>
	<head>
		<title>Reference as Return Values</title>
	</head>
	<body>
		<?php
			function &ref_return(){
				global $a;
				$a*=2;
				return $a;
			}
			$a=10;
			$b=&ref_return();

			echo "a:{$a}/b:{$b}<br>";

			$b=30;

			echo "a:{$a}/b:{$b}<br>";

			function &increment(){
				static $var=0;
				$var++;
				return $var;
			}

			$c=&increment(); //var increments
			increment();	//one time
			$c++;			//each line
			increment();	// the total value is 4
			echo "c: {$c}<br>";


		?>
	</body>
</html>