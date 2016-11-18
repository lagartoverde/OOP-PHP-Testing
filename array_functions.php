<html>
	<head>
		<title>Array Functions</title>
	</head>
	<body>
		<?php
			$numbers= array(1,2,3,4,5,6 );
			print_r($numbers);
			echo "<br><br>";

			//Pulls the first element out of an array and returns it
			echo "Shift:<br>";
			$a=array_shift($numbers);
			echo "a: {$a}<br>";
			print_r($numbers);
			echo "<br><br>";

			//Puts an element in the first position and returns the element count
			echo "Unshift:<br>";
			$b=array_unshift($numbers,'first');
			echo "b: {$b}<br>";
			print_r($numbers);
			echo "<br><br>";

			//Pops the last element of an array and returns it
			echo "Pop:<br>";
			$c=array_pop($numbers);
			echo "c: {$c}<br>";
			print_r($numbers);
			echo "<br><br>";

			//Puts an element in the last position and returns the element count
			echo "Push:<br>";
			$d=array_push($numbers,'last');
			echo "d: {$d}<br>";
			print_r($numbers);
			echo "<br><br>";
		?>
	</body>
</html>